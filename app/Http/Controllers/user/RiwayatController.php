<?php

namespace App\Http\Controllers\user;

use App\Models\pesanan;
use App\Models\ratting;
use App\Models\pengembalian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\penyedia;

class RiwayatController extends Controller
{
    public function index()
    {

        $pesananDitolak = Pesanan::whereNotIn('status', ['dalam proses tahap 1', 'dalam proses tahap 2'])
            ->whereIn('status', ['di terima', 'di tolak', 'selesai', 'tunggu pengembalian', 'pengembalian berhasil' ])
            ->orderBy('created_at', 'desc')
            ->get();


        return view('user.riwayat', compact('pesananDitolak',));
    }

    public function rating(Request $request)
    {
        $pesanan_id = $request->pesanan_id;
        $pesanan = pesanan::find($pesanan_id);

        $penyedia = $pesanan->penyedia;

        $user = Auth::user();

        $buat = ratting::create([
            'user_id' => $user->id,
            'penyedia_id' => $penyedia->id,
            'pesanan_id' => $pesanan->id,
            'ratting' => $request->ratting,
            'komentar' => $request->komentar,
        ]);

        $pesanan->update(['status' => 'selesai']);
        // dd($buat);

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }


    public function pengembalian(Request $request)
    {

        $request->validate([
            'metode' => 'required',
            'tujuan' => 'required',
            'keterangan' => 'required'
        ]);

        pengembalian::create([
            'user_id' => Auth::user()->id,
            'pesanan_id' => $request->pesanan_id,
            'metode' => $request->metode,
            'tujuan' => $request->tujuan,
            'keterangan' => $request->keterangan,
            'status' => 'process',
        ]);

        $pesanan_id = $request->pesanan_id;
        $pesanan = pesanan::find($pesanan_id);


        $pesanan->update(['status' => 'tunggu pengembalian']);


        return back()->with('success', 'Data Berhasil Ditambahkan');
    }
}
