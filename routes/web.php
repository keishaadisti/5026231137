<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\KeranjangController;

Route::get('/bootstrap', function () {
    return view('bootstrap1');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/code', function () {
    return view('code_bootstrap');
});

Route::get('/linktree', function () {
    return view('linktree_task');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('/latihan_ets', function () {
    return view('latihan_ets');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('dosen', [Coba::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/mouse', [MouseController::class, 'index']);
Route::get('/mouse/tambah', [MouseController::class, 'tambah']);
Route::post('/mouse/store', [MouseController::class, 'store']);

Route::get('/', function () {
    return view('keranjang.start');
});

Route::get('/keranjang', [KeranjangController::class, 'start']);
Route::get('/keranjang/tambah', [KeranjangController::class, 'form']);
Route::post('/keranjang/store', [KeranjangController::class, 'store']);
Route::get('/keranjang/cart', [KeranjangController::class, 'cart']);
Route::get('/keranjang/hapus/{id}', [KeranjangController::class, 'hapus']);
