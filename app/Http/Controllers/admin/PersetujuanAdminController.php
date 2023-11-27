<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersetujuanAdminController extends Controller
{
    public function index()
    {
        return view('admin.persetujuan');
    }
}
