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
<<<<<<< Updated upstream
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

=======
    {
        ratting::create([
            'ratting' => $request->ratting,
            'komentar' => $request->komentar,
        ]);
        return back()->with('success', 'Berhasil Komentar');
    }
>>>>>>> Stashed changes

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
