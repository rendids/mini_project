<?php

namespace App\Http\Controllers\penyedia;

use App\Models\ratting;
use App\Models\penyedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RattingController extends Controller
{
    public function index()
    {
        $penyedia = Auth::user()->penyedia->id;
        $ratings = ratting::where('penyedia_id', $penyedia)->get();
        return view('penyedia.ratting', compact('ratings'));
    }
}
