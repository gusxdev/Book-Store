<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',[BukuController::class, 'index'])->name('root');

Route::resource('/buku',BukuController::class);
Route::resource('/penerbit',PenerbitController::class);
Route::resource('/kategori',KategoriController::class);

Route::get('buku/delete/{id}', [BukuController::class, 'delete'])->name('buku.delete');
Route::get('penerbit/delete/{id}', [PenerbitController::class, 'delete'])->name('penerbit.delete');
Route::get('kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');


Route::get('/', [BukuController::class, 'home'])->name('home');
Route::get('/admin', [BukuController::class, 'admin'])->name('admin');
Route::get('/pengadaan', [BukuController::class, 'pengadaan'])->name('pengadaan');
