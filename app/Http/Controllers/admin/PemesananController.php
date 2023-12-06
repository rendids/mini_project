<?php

namespace App\Http\Controllers\admin;

use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesan = pesanan::where('status', 'dalam proses tahap 1')->get();
       return view('admin.pemesanan', compact('pemesan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function setujui($id)
    {
      $pesanan =  pesanan::find($id);

      $pesanan->update(['status' => 'dalam proses tahap 2']);


      return redirect()->back();
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
