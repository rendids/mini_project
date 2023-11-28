<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\penyedia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Harap isi alamat e-mail',
            'password.required' => 'Harap isi password'
        ]);
        // dd($validator);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Redirect based on user role
            if ($user->role === 'admin') {
                return redirect()->route('dashboard.admin')->with('message', 'Login berhasil');
            } elseif ($user->role === 'user') {
                return redirect()->route('dashboard.user')->with('message', 'Login berhasil');
            } elseif ($user->role === 'penyedia') {
                return redirect()->route('dashboard.penyedia')->with('message', 'Login berhasil');
            }
        }

        return redirect()->back()->withInput()->withErrors(['password' => 'Nama atau password salah']);
    }


    public function registerUser()
    {
        return view('auth.registerUser');
    }

    public function registerPenyedia()
    {
        return view('auth.registerpenyedia');
    }

    public function registerUsersave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi' => 'required',
        ]);

        $validator->validate();

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 'user',
        ]);
        return redirect()->route('login');
    }
    public function registerPenyediasave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi' => 'required',
            // penyedia
            'id_kategori' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'foto' => 'required',
        ]);

        $validator->validate();

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 'penyedianotaprov',
        ]);

        $gambar = $request->file('foto');
        $namaGambar = Str::random(40) . '.' . $gambar->getClientOriginalExtension();
        $request->gambar->storeAs('fotopenyedia', $namaGambar, 'public');

        penyedia::create([
            'id_user' => $user->id,
            'id_kategori' => $request->id_kategori,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'foto' => $request->$namaGambar
        ]);

        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
