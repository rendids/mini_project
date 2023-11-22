<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Harap isi nama',
            'password.required' => 'Harap isi password'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt($request->only('name', 'password'))) {
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


    public function register(){

    }

    public function registersave(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi' => 'required',
        ]);
    }

    public function logout()
}
