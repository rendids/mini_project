<?php

namespace App\Http\Controllers\penyedia;

use App\Models\User;
use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyedialogin = Auth::user()->penyedia->id;
        $user=User::where('role', 'user')->count();
        $penyedia=pesanan::where('penyedia_id', $penyedialogin)->where('status', 'di tolak')->count();
        $penyediaterima=pesanan::where('penyedia_id', $penyedialogin)->where('status','!=' ,'di tolak')->count();
        return view('penyedia.dahsboard',compact('user','penyedia', 'penyediaterima'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
