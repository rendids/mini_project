<?php

namespace App\Http\Controllers\penyedia;

use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function index()
    {
        $pesan = pesanan::where('status', 'dalam proses tahap 2')->get();
       return view('penyedia.pesanan', compact('pesan'));
    }

    public function tolakpesanan($id){
        $pesan = pesanan::find($id);
        $pesan->update([
            'status' => 'di tolak'
        ]);
        return redirect()->back();
    }

    public function terimapesanan($id){
        $pesan = pesanan::find($id);
        $pesan->update([
            'status' => 'di terima'
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');;
    }
}
