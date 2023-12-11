<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        return view("user.profile", compact('data_user'));
    }
    public function updatefoto(Request $request, string $id)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'foto.required' => 'Harus diisi',
            'foto.image' => 'File harus berupa gambar',
            'foto.mimes' => 'Format gambar tidak valid',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 2 MB',
        ]);

        $userupdate = User::find($id);

        $foto = $request->file('foto');
        $fotoPath = $foto->storeAs('foto_user', 'foto_' . Str::random(12) . '.' . $foto->getClientOriginalExtension(), 'public');
        // Hapus foto lama jika ada
        if ($userupdate->foto && Storage::exists($userupdate->foto)) {
            Storage::disk('public')->delete($userupdate->foto);
        }
        $userupdate->update([
            'foto' => $fotoPath,
        ]);

        return redirect()->back();
    }
    public function updateprofile(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'telp' => 'required|numeric|regex:/^\d*$/|digits_between:10,12',
            'alamat' => 'required|min:5|max:200',
        ],[
            'name.required' =>'Harus diisi',
            'email.required' => 'Harus diisi',
            'email.unique' => 'email sudah digunakan',
            'email.email'=>'email tidak valid',
            'telp.required' => 'Harus diisi',
            'telp.numberic' => 'Harus berupa angka',
            'telp.regex' =>'format tidak valid',
            'telp.between'=>'harus memiliki antara 10-12 angka',
            'alamat.min' =>'Alamat minimal 5 karakter',
            'alamat.max'=> 'Alamat maksimal 200 karakter',
            'alamat.required' => 'Harus diisi',
        ]);
        // dd($request);
        $userupdate = User::find($id);
        $userupdate->update([
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
        ]);

        // dd($userupdate);
        return redirect()->back();
    }


    public function updatepassword(Request $request, string $id)
    {
        $request->validate([
            'password_lama' => 'required',
            'password' => 'required|min:8',
        ], [
            'password.required' => 'isi password lama',
            // 'password.required' => 'Password baru tidak boleh kosong',
            'password.min' => 'Password baru minimal 8 karakter',
        ]);

        $user = User::find($id);

        if (!Hash::check($request->password_lama, $user->password)) {
            return response()->json(['error' => 'Invalid old password.'], 400);
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back()->with('success', 'Password berhasil diperbarui');
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
