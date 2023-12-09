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
        $pesananDitolak = pesanan::where('status', 'di tolak')->get();
        $pesananDiterima = pesanan::where('status', 'di terima')->get();
        return view('user.riwayat', compact('pesananDitolak', 'pesananDiterima'));
    }

    public function rating(Request $request)
{
    $request->validate([
        'ratting' => 'required',
        'komentar' => 'required'
    ]);

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

    $pesanan->update(['status' => 'sudah di rating']);
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

        $user = Auth::user();

        pengembalian::create([
            'user_id' => $user->id,
            'id_pesanan' => '1',
            'metode' => $request->metode,
            'tujuan' => $request->tujuan,
            'keterangan' => $request->keterangan,
        ]);

    return back()->with('success', 'Data Berhasil Ditambahkan');
    }
}
