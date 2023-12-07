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

    public function profileupdate(Request $request, $id)
    {
        $request->validate([
            'foto' => 'required_if:anotherfield,nullable',
            'name' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'harga' => 'required'
        ]);

        $user =  user::find($id);
        $foto = $request->file('foto');
        if ($foto) {
            $fotoPath = $foto->storeAs('fotopenyedia', 'foto_' . $user->id . '.' . $foto->getClientOriginalExtension(), 'public');
        } else {
            $fotoPath = $user->penyedia->foto ?? null; // Use existing photo path if available
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $penyedia = penyedia::where('id_user', $user->id)->first();

        $penyedia->update([
            'foto' => $fotoPath,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'status' => 'profilelengkap'
        ]);
        //   dd($penyedia);
        return redirect()->route('dashboard.penyedia')->with('success', 'Data berhasil disimpan.');
        return redirect()->back();
    }
}
