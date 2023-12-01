<?php

namespace App\Http\Controllers\admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori', compact('kategori'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:kategoris',
            'harga' => 'required|gt:0',
        ], [
            'name.unique' => 'Nama kategori tidak boleh sama',
            'name.required' => 'Nama Kategori tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'harga.gt' => 'Harga tidak boleh min',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        kategori::create($request->all());

        return redirect()->back()->with('success', 'Berhasil menambahkan kategori');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|unique:katgoris',
        'harga' => 'required|gt:0',
    ], [
        'name.unique' => 'Nama kategori tidak boleh sama',
        'name.required' => 'Nama kategori tidak boleh kosong',
        'harga.required' => 'Harga tidak boleh kosong',
        'harga.gt' => 'Harga tidak boleh min',
    ]);

    

    $kategori = Kategori::find($id);

    $kategori->update($request->all());

    return redirect()->route('kategori')->with('success', 'Berhasil mengubah data');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $kategori = kategori::findOrfail($id);

       $kategori->delete();

       return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
