<?php

namespace App\Http\Controllers\penyedia;

use App\Models\User;
use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyedia;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyedialogin = Auth::user()->penyedia->id;
        $user = User::where('role', 'user')->count();
        $penyedia = pesanan::where('penyedia_id', $penyedialogin)->where('status', 'di tolak')->count();
        $penyediaterima = pesanan::where('penyedia_id', $penyedialogin)->where('status', 'di ratting')->count();
        $selesai = pesanan::where('penyedia_id', $penyedialogin)->where('status', 'selesai')->count();
        $pesanan = Pesanan::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('SUM(total) as total')
        )->where('penyedia_id', $penyedialogin)
            ->where('status', 'selesai')
            ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('YEAR(created_at)'))
            ->get();

        // dd($pesanan);

        $proses = [];
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;

        for ($month = 1; $month <= 12; $month++) {
            $date = Carbon::createFromDate($currentYear, $month, 1);
            $yearMonth = $date->isoFormat('MMMM');
            $color = ($currentYear == $currentYear && $month == $currentMonth) ? 'blue' : 'green';

            $proses[$yearMonth] = [
                'month' => $yearMonth,
                'harga' => 0,
                'color' => $color,
            ];
        }

        foreach ($pesanan as $item) {
            $yearMonth = Carbon::createFromDate($item->year, $item->month, 1)->isoFormat('MMMM');

            if (isset($proses[$yearMonth])) {
                $proses[$yearMonth]['harga'] = $item->total * 0.95;
            }
        }

        $chartData = array_values($proses);
        // return $chartData;

        return view('penyedia.dahsboard', compact('user', 'penyedia', 'penyediaterima', 'selesai', 'chartData'));
    }

}
