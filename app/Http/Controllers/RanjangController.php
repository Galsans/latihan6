<?php

namespace App\Http\Controllers;

use App\Models\ranjang;
use Illuminate\Http\Request;

class RanjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ranjang = Ranjang::all();
        return view('ranjang.index', compact('ranjang'));
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
    public function show(ranjang $ranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ranjang $ranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ranjang $ranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ranjang $ranjang)
    {
        //
    }
}
