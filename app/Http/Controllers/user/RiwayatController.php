<?php

namespace App\Http\Controllers\user;

use App\Models\ratting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiwayatController extends Controller
{
    public function index()
    {
       return view('user.riwayat');
    }
    public function rating(Request $request)
    {
        ratting::create([
            'ratting'=>$request->ratting,
            'komentar'=>$request->komentar,
        ]);
        return back()->with('success', 'Data Berhasil Ditambahkan');
    }
}
