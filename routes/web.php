<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
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

Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('produks-create', [ProdukController::class, 'create'])->name('produk.create');

Route::get('produks-edit', [ProdukController::class, 'edit'])->name('produk.edit');

Route::post('produks-store', [ProdukController::class, 'store'])->name('produk.store');

Route::delete('produks-delete', [ProdukController::class, 'delete'])->name('produk.destroy');
