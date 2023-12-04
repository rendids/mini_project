<?php

namespace App\Http\Controllers\penyedia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
       return view('penyedia.pesanan');
    }

    public function tolakpesanan(){

    }

    public function terimapesanan(){
        
    }
}
