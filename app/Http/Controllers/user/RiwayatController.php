<?php

namespace App\Http\Controllers\user;

use App\Models\pesanan;
use App\Models\ratting;
use App\Models\pengembalian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        ratting::create([
            'ratting' => $request->ratting,
            'komentar' => $request->komentar,
        ]);
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
            '' => '',
            '' => '',
            '' => '',
        ]);
    }
}
