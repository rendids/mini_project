<?php

namespace App\Http\Controllers\penyedia;

use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notifikasi;

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

        $pesanId = $pesan->users->id;

        Notifikasi::create([
            'user_id' => $pesanId,
            'pesan' => 'pesanan anda di tolak'
          ]);

        return redirect()->back()->with('success', 'Berhasil ditolak');
    }

    public function terimapesanan($id){
        $pesan = pesanan::find($id);
        $pesan->update([
            'status' => 'di terima'
        ]);

        $pesanId = $pesan->users->id;


        Notifikasi::create([
            'user_id' => $pesanId,
            'pesan' => 'pesanan anda di terima'
          ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');;
    }
}
