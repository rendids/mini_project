<?php

namespace App\Http\Controllers;

use App\Models\penyedia;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $penyedia = penyedia::get();
        $bestseller = $penyedia->sortByDesc(function ($penyedia) {
            return $penyedia->pesanan;
        })->take(4);
        return view('welcome', compact('bestseller'));
    }

    public function tandai($id) {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->delete();

        return back();
    }
}
