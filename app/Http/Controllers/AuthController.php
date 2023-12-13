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
                return redirect()->route('dashboard.admin')->with('message', 'Login berhasil');
            } elseif ($user->role === 'user') {
                return redirect()->route('dashboard.user')->with('message', 'Login berhasil');
            } elseif ($user->role === 'penyedia') {
                return redirect()->route('dashboard.penyedia')->with('message', 'Login berhasil');
            }
            {
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi-password' => 'required',
        ],[
            'name.required' => 'Harap masukkan username',
            'email.required' => 'Harap masukkan email',
            'password.required' => 'Harap masukkan password',
            'konfirmasi-password.required' => 'Harap masukkan password'
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
        return redirect()->route('login');
    }
    public function registerPenyediasave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi-password' => 'required',
            // penyedia
            'layanan' => 'required',
            'alamat' => 'required|min:5|max:200',
            'telp' => 'required|numeric|regex:/^\d*$/|digits_between:10,12',

        ],[
            'name.required' => 'Harap masukkan username',
            'email.required' => 'Harap masukkan email',
            'password.required' => 'Harap masukkan password',
            'konfirmasi-password.required' => 'Harap masukkan konfirmasi password',
            'layanan.required' => 'Harap masukkan nama layanan jasa',
            'alamat.required' => 'Harap masukkan alamat',
            'alamat.min' => 'alamat minimal 5 huruf',
            'alamat.max' => 'alamat maksimal tidak melebihi 200 kalimat',
            'telp.required' => 'Harap masukkan no telp',
            'telp.numeric' => 'no telp harus berupa angka',
            'telp.regex' => 'format no telpon tidak valid',
            'telp.digits_between' => 'no telp harus memiliki panjang antara 10 hingga 12'
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

        return redirect('auth/login')->with('success', 'silahkan tunggu konfirmasi admin');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect()->route('login')->with('success','logout berhasil');
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
