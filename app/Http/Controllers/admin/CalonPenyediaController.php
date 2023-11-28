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
    $penyediaUsers = User::where('role', 'penyedianotaprov')->get();

    return view('admin.calonpenyedia', compact('penyediaUsers'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //a
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
