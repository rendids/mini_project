<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pengembalian;
use App\Models\pesanan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengambilans = pengembalian::with('user', 'pesanan')->orderByDesc('created_at')->get();
        return view('admin.pengajuan', compact('pengambilans'));
    }

    public function pengajuanProcess(string $id)
    {
        $pengembalian = pengembalian::where('id', $id)->first();

        //process data
        $pengembalian->status = 'success';
        $pengembalian->update();

        $pesanan = pesanan::where('id', $pengembalian->pesanan_id)->first();
        $pesanan->status = 'selesai';
        $pesanan->update();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

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
