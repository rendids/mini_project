<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\penyedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalonPenyediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $count = User::where('role', 'penyedianotaprov')->count();
    $penyediaUsers = User::where('role', 'penyedianotaprov')->get();

    return view('admin.calonpenyedia', compact('penyediaUsers', 'count'));
}

    public function approv(string $id)
    {
       $penyedia = User::find($id);

       $penyedia->update(['role' => 'penyedia']);

       return redirect()->back()->with('success', 'berhasil menerima penyedia baru');
    }

    public function tolak(string $id)
    {
        $penyedia = User::find($id);

        $penyedia->delete();

        return redirect()->back()->with('success', 'berhasil menolak penyedia baru');
    }
}
