<?php

namespace App\Http\Controllers\admin;

use App\Models\pembayaran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::paginate(5); // Change 10 to the number of items per page you want
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
            'metode.required' => 'metode wajib diisi',
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
        pembayaran::create($data);                  
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
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
        $data = $request->validate([
            'metode' => 'required',
            'tujuan' => 'required',
            'keterangan' => $request->input('metode') === 'E-WALET' ? 'nullable|image' : 'required,nullable' ,
        ],[
            'metode.required' => 'Metode pembayaran harus dipilih.',
            'tujuan.required' => 'Tujuan pembayaran harus diisi.',
            'keterangan.required'=>'keterangan harus diisi',
            'keterangan.image' => 'Keterangan harus berupa file gambar (jika metode E-WALET).',
        ]);

        $metodePembayaran = $request->input('metode');
        $tujuan = $request->input('tujuan');

        $pembayaran = pembayaran::findOrFail($id);

        if ($metodePembayaran === 'E-WALET') {
            if ($request->hasFile('keterangan')) {
                $keteranganFile = $request->file('keterangan');
                $namaGambar = Str::random(40) . '.' . $keteranganFile->getClientOriginalExtension();
                $request->keterangan->storeAs('pembayaran', $namaGambar, 'public');

                // Hapus gambar sebelumnya jika ada
                if ($pembayaran->keterangan) {
                    Storage::disk('public')->delete('pembayaran/' . $pembayaran->keterangan);
                }

                $data['keterangan'] = $namaGambar;
            }
        }
        // Lakukan pembaruan data jika 'tujuan' sama
        if ($pembayaran->tujuan === $tujuan) {
            $pembayaran->update($data);
            return redirect()->route('pembayaran')->with('success', 'berhasil mengupdate metode');
        } else {
            // 'tujuan' berbeda, periksa apakah ada data dengan 'tujuan' yang sama
            $existingPembayaran = pembayaran::where('tujuan', $tujuan)->first();
            if ($existingPembayaran) {
                return back()->with('error', 'Tujuan ini sudah digunakan');
            }

            $pembayaran->update($data);
            return redirect()->route('pembayaran')->with('success', 'berhasil mengupdate metode');
        }
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
