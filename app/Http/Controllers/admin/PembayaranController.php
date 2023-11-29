<?php

namespace App\Http\Controllers\admin;

use App\Models\pembayaran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = pembayaran::all();
        return view('admin.pembayaran', compact('pembayaran'));
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
        $data = $request->validate([
            'metode' => 'required',
            'tujuan' => 'required|unique:pembayarans,tujuan,NULL,id,metode,' . $request->input('metode'),
            'keterangan' => 'required',
        ], [
            'metode.required' => 'wajib diisi',
            'tujuan.required' => 'tujuan pembayaran wajib diisi',
            'tujuan.unique' => 'tujuan pembayaran telah ada',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);
            $metodePembayaran = $request->input('metode');
            $tujuan = $request->input('tujuan');

            if ($metodePembayaran === 'E-WALET') {
                if ($request->hasFile('keterangan')) {
                    $keteranganFile = $request->file('keterangan');
                    $namaGambar = Str::random(40) . '.' . $keteranganFile->getClientOriginalExtension();
                    $request->keterangan->storeAs('pembayaran', $namaGambar, 'public');

                    $data['keterangan'] = $namaGambar;
                } else {
                return  back()->with('error', 'pembayaran gagal');
                }
            }
            // dd($data);
            pembayaran::create($data);

            return redirect()->back();
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
      $pembayaran =  pembayaran::findOrfail($id);

      $pembayaran->delete();

      return redirect()->back()->with('success', 'berhasila menghapus pembayaran');
    }
}
