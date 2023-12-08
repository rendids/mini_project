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
        return view("user.profile", compact('data_user'));
    }

    /**
     * Show the form for creating a new resource.
     */


    public function updateprofile(Request $request, string $id)
    {
        $request->validate([
            'foto' => 'required',
            'name' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ]);
        // dd($request);
        $userupdate = User::find($id);
        // Handle file upload
        $foto = $request->file('foto');
        if ($foto) {
            $fotoPath = $foto ? $foto->storeAs('foto_user', 'foto_' . Str::random(12) . '.' . $foto->getClientOriginalExtension(), 'public') : $userupdate->foto;
        } else {
            $fotoPath = $userupdate->foto ?? null;
        }

        // Update other fields
        $userupdate->update([
            'foto' => $fotoPath,
            'nama' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
        ]);

        // dd($userupdate);
        return redirect()->back();
    }


    /**
     * Store a newly created resource in storage.
     */
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
