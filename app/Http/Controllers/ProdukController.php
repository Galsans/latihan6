<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        Produk::create($request->all());
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'namaProduk' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        $produk = Produk::find($id);
        $produk->namaProduk = $request->input('namaProduk');
        $produk->harga = $request->input('harga');
        $produk->qty = $request->input('qty');
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
