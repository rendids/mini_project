<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Mail\SendMAil;
use App\Models\penyedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
        $user = User::find($id);

        if ($user->role === 'penyedianotaprov') {
            $user->update(['role' => 'penyedia']);
            Mail::to($user->email)->send(new SendMAil($user, 'terima'));
        }


        return redirect()->back()->with('success', 'berhasil menerima penyedia baru');
    }

    public function tolak(string $id)
    {
        $user = User::find($id);

        if ($user->role === 'penyedianotaprov') {
            $user->delete();
            Mail::to($user->email)->send(new SendMAil($user, 'tolak'));
        }

        return redirect()->back()->with('success', 'berhasil menolak penyedia baru');
    }
}
