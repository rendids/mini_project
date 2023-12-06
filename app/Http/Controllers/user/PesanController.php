<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\pesanan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {

        $pesan = Pesanan::where('status','!=', 'dalam proses')->get();

       return view('user.pesan', compact('pesan'));
    }
}
