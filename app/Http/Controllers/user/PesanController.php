<?php

namespace App\Http\Controllers\user;

use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $pesan = Pesanan::whereNotIn('status', ['selesai', 'tunggu pengembalian'])->where('pemesan', $user)
        ->orderByDesc('created_at')
        ->get();


       return view('user.pesan', compact('pesan'));
    }
}
