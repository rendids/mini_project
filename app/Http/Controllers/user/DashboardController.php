<?php

namespace App\Http\Controllers\user;

use App\Models\pesanan;
use App\Models\penyedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyedia = Penyedia::get();
        $bestseller = $penyedia->sortByDesc(function ($penyedia) {
            return $penyedia->pesanan; // Gantilah dengan metode atau atribut yang sesuai
        })->take(6);

        // dd($bestseller);
        $penyedia = penyedia::where('status', 'profilelengkap')->paginate(8); // Change 10 to the number of items per page you want

        return view('user.dahboard', compact('penyedia', 'bestseller'));
    }


    public function search(Request $request)
    {
        $keyword = $request->input('search');

    $bestseller = Penyedia::where('layanan', 'LIKE', '%' . $keyword . '%')
        ->paginate(8);

    $penyedia = Penyedia::where('layanan', 'LIKE', '%' . $keyword . '%')
        ->where('status', 'profilelengkap')
        ->paginate(8);

    return view('user.dahboard', compact('penyedia', 'bestseller'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
