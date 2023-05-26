<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RanjangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// FILE PRODUK

Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('produks-create', [ProdukController::class, 'create'])->name('produk.create');

Route::get('produks-edit/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');

Route::post('produks-update/{id}', [ProdukController::class,'update'])->name('produk.update');

Route::post('produks-store', [ProdukController::class, 'store'])->name('produk.store');

Route::delete('produks-delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');


// FILE RANJANG
Route::get('ranjang', [RanjangController::class, 'index'])->name('cart.index');


// FILE TRANSAKSI
Route::get('transaksi', [TrxController::class, 'index'])->name('trx.index');
