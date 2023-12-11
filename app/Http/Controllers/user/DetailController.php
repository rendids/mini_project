<?php

namespace App\Http\Controllers\user;

use App\Models\pesanan;
use App\Models\penyedia;
use App\Models\Notifikasi;
use App\Models\pembayaran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $sedia = penyedia::find($id);
        $bayar = pembayaran::all();
        return view('user.detail', compact('sedia', 'bayar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function memesan(string $id)
    {
        $sedia = penyedia::with('user')->find($id);
        return view('user.memesan', compact('sedia', 'bayar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $request->validate([
            'pemesan' => 'required',
            'nopemesan' => 'required',
            'penyedia' => 'required',
            'jasa' => 'required',
            'alamatpemesan' => 'required',
            'waktu' => 'required',
            'pembayaran' => 'required',
            'bukti' => 'required'
        ]);
        $keteranganFile = $request->file('bukti');
        if ($keteranganFile) {
            $namaGambar = Str::random(40) . '.' . $keteranganFile->getClientOriginalExtension();
            $keteranganFile->storeAs('public/bukti', $namaGambar);
        } else {
            // Handle the case where no file is present
        }

        $buat = pesanan::create([
            'pemesan' => $request->pemesan,
            'nopemesan' => $request->nopemesan,
            'penyedia_id' => $id,
            'jasa' => $request->jasa,
            'alamatpemesan' => $request->alamatpemesan,
            'waktu' => $request->waktu,
            'pembayaran' => $request->pembayaran,
            'bukti' => $namaGambar, // Use $namaGambar directly
            'total' => $request->total,
            'status' => 'dalam proses tahap 1',
        ]);
       $user = Auth::user();

        Notifikasi::create([
            'user_id' => $user->id,
            'pesan' => 'anda berhasil membuat pesanan baru',
        ]);

        return redirect()->route('pesan');
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
