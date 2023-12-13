<?php

namespace App\Http\Controllers\penyedia;

use App\Models\User;
use App\Models\penyedia;
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
        return view('penyedia.profile', compact('data_user'));
    }

    public function fotopenyediaupdate(Request $request, $id)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'foto.required' => 'Harus diisi',
            'foto.image' => 'File harus berupa gambar',
            'foto.mimes' => 'Format gambar tidak valid',
            'foto.max' => 'Ukuran gambar tidak boleh lebih dari 2 MB',
        ]);

        $user = User::find($id);
        $userupdate = penyedia::where('id_user', $user->id)->first();
        // dd($userupdate);

        $foto = $request->file('foto');
        $fotoPath = $foto->storeAs('fotopenyedia', 'foto_' . $user->id . '.' . $foto->getClientOriginalExtension(), 'public');

        if ($userupdate->foto && Storage::exists($userupdate->foto) && $userupdate->foto !== 'default.png') {
            Storage::disk('public')->delete($userupdate->foto);
        }

        $userupdate->update([
            'foto' => $fotoPath,
        ]);
        // dd($userupdate);

        return redirect()->back();
    }
    public function updateprofile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telp' => 'required|numeric|regex:/^\d*$/|digits_between:10,12',
            'alamat' => 'required|min:5|max:200',
            'harga' => 'required|min:4'
        ], [
            'name.required' => 'Nama Harus Diisi',
            'email.required' => 'Email Harus Diisi',
            'telp.required' => 'No telpon harus diisi',
            'telp.numeric' => 'No telpon harus berupa angka',
            'telp.regex' => 'Format no telpon tidak valid',
            'telp.digits_between' => 'No telpon harus memiliki panjang antara 10 hingga 12',
            'harga.required' => 'Harga Harus Diisi',
            'harga.min' => 'harga minimal 4 karakter'
        ]);

        $user =  user::find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $penyedia = penyedia::where('id_user', $user->id)->first();

        $penyedia->update([
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'status' => 'profilelengkap'
        ]);
        //   dd($penyedia);
        return redirect()->route('dashboard.penyedia')->with('success', 'Data berhasil disimpan.');
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
}
