<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyedia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\untung;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role', 'user')->count();
        $nominal = untung::sum('nominal');
        $penyedia = User::where('role', 'penyedia')->count();
        $selesai = pesanan::where('penyedia_id', $penyedia)->where('status', 'selesai')->count();
        $processData = [];
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;

        for ($month = 1; $month <= 12; $month++) {
            $date = Carbon::createFromDate($currentYear, $month, 1);
            $yearMonth = $date->isoFormat('MMMM');

            $color = ($month == $currentMonth) ? 'blue' : 'green';

            $grafikData = pesanan::select(
                'penyedia_id',
                DB::raw('COUNT(*) as total')
            )
                ->whereYear('created_at', $currentYear)
                ->whereMonth('created_at', $month)
                ->groupBy('penyedia_id')
                ->orderBy('total', 'desc')
                ->first();

                // dd($grafikData);
            $angkaSama = pesanan::select('total')
                ->whereYear('created_at', $currentYear)
                ->whereMonth('created_at', $month)
                ->groupBy('total')
                ->havingRaw('COUNT(*) > 1')
                ->pluck('total')
                ->toArray();

                // dd($angkaSama);
            $dataSama = pesanan::select('penyedia_id', 'total')
                ->whereYear('created_at', $currentYear)
                ->whereMonth('created_at', $month)
                ->whereIn('total', $angkaSama)
                ->get();


                $penyediaTerbanyak = pesanan::select('penyedia_id', DB::raw('COUNT(*) as total'))
                ->groupBy('penyedia_id')
                ->orderByDesc('total')
                ->first();
                $nama = $penyediaTerbanyak->penyedia->user->name; 
                // dd($penyediaTerbanyak);
            $processData[$yearMonth] = [
                'month' => $yearMonth,
                '1' => $grafikData->total ?? 0,
                'nama' => $penyediaTerbanyak->penyedia->user->name,
                'color' => $color,
                'angka_sama' => $dataSama->map(function ($item, $key,) {
                    return [
                        'penyedia_data' => 'Penyedia Data = ' . $item->penyedia->user->name,
                        'total' => 'Total = ' . $item->total,

                    ];
                })->toArray(),
            ];
        }

    $chartData = array_values($processData);
    // dd($chartData);
        return view('admin.dashboard', compact('user', 'penyedia', 'selesai', "nama",'chartData', 'nominal','penyediaTerbanyak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
