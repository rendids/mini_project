<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    /**
     * Show the form for creating a new resource.
     */


      public function updatefoto(Request $request, string $id)
    {
        $request->validate([
            'foto' => 'required',
        ],[
            'foto.required' => 'Harus diisi',
        ]);
        $userupdate = User::find($id);
        $foto = $request->file('foto');
        if ($foto) {
            $fotoPath = $foto ? $foto->storeAs('foto_user', 'foto_' . Str::random(12) . '.' . $foto->getClientOriginalExtension(), 'public') : $userupdate->foto;
        } else {
            $fotoPath = $userupdate->foto ?? null;
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
            'email' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ],[
            'name.required' =>'Harus diisi',
            'email.required' => 'Harus diisi',
            'telp.required' => 'Harus diisi',
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


    public function updatepassword( Request $request, string $id)
    {
        $request->validate([
            'password_lama' => 'required',
            'password' => 'required|confirmed|min:8',
        ], [
            'password_lama.required' => 'Password lama tidak boleh kosong',
            'password.required' => 'Password baru tidak boleh kosong',
            'password.confirmed' => 'Konfirmasi password baru tidak cocok',
            'password.min' => 'Password baru minimal 8 karakter',
        ]);

        // Proses logika untuk memperbarui password
        // ...

        return redirect()->back()->with('success', 'Password berhasil diperbarui');
    }
    public function changePassword(Request $request)
    {




        return redirect()->route('password.change')->with('success', 'Password changed successfully!');
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
