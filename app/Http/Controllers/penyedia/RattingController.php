<?php

namespace App\Http\Controllers\penyedia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RattingController extends Controller
{
    public function index()
    {
       return view('penyedia.ratting');
    }
}
