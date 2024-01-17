<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\penyedia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\password;

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
                return redirect()->route('dashboard.admin')->with('success', 'Login berhasil');
            } elseif ($user->role === 'user') {
                if ($user->email_verified_at == null) {
                    return redirect()->route('verification.notice');
                }
                return redirect()->route('dashboard.user')->with('success', 'Login berhasil');
            } elseif ($user->role === 'penyedia') {
                return redirect()->route('dashboard.penyedia')->with('success', 'Login berhasil');
            } {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Anda tidak memiliki akses untuk login.');
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
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'konfirmasi-password' => 'required|same:password',
        ], [
            'name.required' => 'Harap masukkan username.',
            'name.unique' => 'Nama pengguna sudah digunakan.',
            'email.required' => 'Harap masukkan email.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Harap masukkan password.',
            'password.min' => 'Panjang password minimal 6 karakter.',
            'konfirmasi-password.required' => 'Harap konfirmasi password.',
            'konfirmasi-password.same' => 'Konfirmasi password tidak cocok dengan password.',
        ]);

        $validator->validate();

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 'user',
        ]);

        event(new Registered($user));

        Auth::login($user);
        if (Auth::user()->email_verified_at == null) {
            return redirect()->route('verification.notice');
        }
        return redirect()->route('login');
    }
    public function registerPenyediasave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'konfirmasi-password' => 'required|same:password',
            'layanan' => 'required',
            'alamat' => 'required|min:5|max:200',
            'telp' => 'required|numeric|regex:/^\d*$/|digits_between:10,13',
        ], [
            'name.required' => 'Harap masukkan username.',
            'email.required' => 'Harap masukkan email.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Harap masukkan password.',
            'password.min' => 'Panjang password minimal 6 karakter.',
            'konfirmasi-password.required' => 'Harap masukkan konfirmasi password.',
            'konfirmasi-password.same' => 'Konfirmasi password tidak cocok dengan password.',
            'layanan.required' => 'Harap masukkan nama layanan jasa.',
            'alamat.required' => 'Harap masukkan alamat.',
            'alamat.min' => 'Alamat minimal 5 karakter.',
            'alamat.max' => 'Alamat maksimal tidak boleh lebih dari 200 karakter.',
            'telp.required' => 'Harap masukkan nomor telepon.',
            'telp.numeric' => 'Nomor telepon harus berupa angka.',
            'telp.regex' => 'Format nomor telepon tidak valid.',
            'telp.digits_between' => 'Nomor telepon harus memiliki panjang antara 10 hingga 13 digit.',
        ]);

        $validator->validate();



        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => 'penyedianotaprov',
        ]);


        penyedia::create([
            'id_user' => $user->id,
            'layanan' => $request->layanan,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect()->route('login')->with('success', 'silahkan tunggu konfirmasi admin');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect()->route('login')->with('success', 'logout berhasil');
    }

    public function kebijakan()
    {
        return view('auth.kebijakan');
    }

    public function lupa_password()
    {
        return view('auth.resetpassword');
    }

    public function passwordemail()
    {
    }
}
