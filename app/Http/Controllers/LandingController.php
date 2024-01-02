<?php

namespace App\Http\Controllers;

use App\Models\penyedia;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Models\ratting;

class LandingController extends Controller
{
    public function index() {
        $penyedia = penyedia::get();
        $bestseller = $penyedia->where('status','profilelengkap')->sortByDesc(function ($penyedia) {
            return $penyedia->pesanan;
        })->take(4);

        $ratting = ratting::all();

        return view('welcome', compact('bestseller', 'ratting'));
    }

    public function tandai($id) {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->delete();

        return back();
    }
}
