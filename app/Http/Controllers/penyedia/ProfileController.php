<?php

namespace App\Http\Controllers\penyedia;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_user = Auth::user();
        // dd($data_user);
        return view('penyedia.profile', compact('data_user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function profileupdate(Request $request, $id)
    {
        $user = User::findorfail($id);

        $user->update($request->all());

        return redirect()->back()->with('berhasil menambahkan profile');
    }

    // public function uploadProfilePhoto(Request $request,)
    // {
    //     $request->validate([
    //         'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $file = $request->file('foto');
    //     $fileName = time() . '.' . $file->getClientOriginalExtension();
    //     $filePath = 'fotopenyedia/' . $fileName;

    //     Storage::disk('public')->put($filePath, file_get_contents($file));

    //     // Simpan nama file foto ke dalam database
    //     auth()->user()->penyedia->update(['foto' => $fileName]);

    //     return redirect()->route('dashboard')->with('success', 'Foto profil berhasil diunggah.');
    // }
    public function uploadPhoto(Request $request, $id)
    {

        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('foto');
        $foto = User::findOrFail($id)->penyedia;

        if($file) {
            Storage::delete('fotopenyedia/' . $foto->foto);

            $img = $file->hashName();
            $file->storeAs('fotopenyedia/', $img);
            $foto->foto = $img;
        }
        // $foto->name = $request->input('nama');
        // $foto->email = $request->input('email');
        // $foto->alamat = $request->input('alamat');
        // $foto->telp = $request->input('telp');
        $foto->status = "profilelengkap";
        $foto->save();



        return redirect()->route('dashboard.penyedia')->with('success', 'Foto profil berhasil diunggah.');
    }

    public function upload(Request $request, $id){
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('foto');
        $foto = User::findOrFail($id)->penyedia;

        if($file) {
            Storage::delete('fotopenyedia/' . $foto->foto);

            $img = $file->hashName();
            $file->storeAs('fotopenyedia/', $img);
            $foto->foto = $img;
        }
        $foto->status = "profilelengkap";
        $foto->save;
        return redirect()->route('dashboard.penyedia')->with('success', 'Foto profil berhasil diunggah.');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
