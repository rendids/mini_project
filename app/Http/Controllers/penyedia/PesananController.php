<?php

namespace App\Http\Controllers\penyedia;

use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use App\Models\untung;

class PesananController extends Controller
{
    public function index()
    {
        $pesan = pesanan::where('status', 'dalam proses tahap 2')->orderByDesc('created_at')->get();
        return view('penyedia.pesanan', compact('pesan'));
    }

    public function tolakpesanan(Request $request, $id)
    {
        $pesan = pesanan::find($id);
        $pesan->update([
            'status' => 'di tolak'
        ]);

        $pesanId = $pesan->users->id;

        Notifikasi::create([
            'user_id' => $pesanId,
            // 'pesan' => 'pesanan anda di tolak oleh penyedia silahkan oleh penyedia silahkan minta pengembalian dana'
            'pesan' =>$request->input('alasan')
        ]);

        return redirect()->back()->with('success', 'Berhasil ditolak');
    }

    public function terimapesanan($id)
    {
        $pesan = Pesanan::find($id);

        if ($pesan) {
            $pesan->update([
                'status' => 'di terima'
            ]);

            $pesanId = $pesan->users->id;
            $nominalawal = $pesan->total;

            Notifikasi::create([
                'user_id' => $pesanId,
                'pesan' => 'pesanan anda di terima oleh penyedia'
            ]);

            // Menghitung 5% dari nilai pesanan
            $nominalDeduction = $nominalawal * 0.05;

            // Mengurangkan 5% dari nilai pesanan
            $nominalawal - $nominalDeduction;

            // Menyimpan nilai 5% ke dalam tabel Untung
            Untung::create([
                'pesanan_id' => $pesan->id, // Sesuaikan dengan ID pesanan yang sesuai
                'nominal' => $nominalDeduction
            ]);

        } else {
            // Handle the case where the pesan object is not found
            // You may want to log an error or provide a response to the user
        }

        return redirect()->back()->with('success', 'Pesanan berhasil diterima.');;
    }
}
