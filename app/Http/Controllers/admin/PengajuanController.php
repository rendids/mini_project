<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pengembalian;
use App\Models\pesanan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $pengambilans = pengembalian::with('user', 'pesanan')->get();
        return view('admin.pengajuan', compact('pengambilans'));
    }

    public function pengajuanProcess(string $id)
    {
        $pengembalian = pengembalian::where('id', $id)->first();

        //process data
        $pengembalian->status = 'success';
        $pengembalian->update();

        $pesanan = pesanan::where('id', $pengembalian->pesanan_id)->first();
        $pesanan->status = 'pengembalian berhasil';
        $pesanan->update();

        return back()->with('success', 'Data Berhasil Ditambahkan');
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
