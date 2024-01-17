<?php

namespace App\Http\Controllers\penyedia;

use App\Models\User;
use App\Models\penyedia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        // dd($request);
        $user = auth::user();
        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
                'email',
            ],
            'telp' => 'required|numeric|digits_between:10,13',
            'alamat' => 'required|min:5|max:200',
            'harga' => 'required|numeric|min:10000',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'telp.required' => 'Nomor telepon harus diisi.',
            'telp.numeric' => 'Nomor telepon harus berupa angka.',
            'telp.digits_between' => 'Nomor telepon harus memiliki panjang antara 10 hingga 13 digit.',
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.min' => 'Alamat minimal 5 karakter.',
            'alamat.max' => 'Alamat maksimal 200 karakter.',
            'harga.required' => 'Harga harus diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'harga.min' => 'Harga minimal 10,000.',
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
    public function updatepasswordprofile(Request $request, string $id)
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
            return redirect()->back()->with('error', 'Password lama tidak cocok');
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back()->with('success', 'Password berhasil diperbarui');
    }
}
