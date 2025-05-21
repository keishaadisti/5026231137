<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
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

Route::get('/bootstrap', function () {
    return view('bootstrap1');
});


Route::get('/welcom', function () {
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
Route::get('dosen', [coba::class, 'index']);

Route::get('/pegawai/{nama}', action: [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController :: class, 'formulir']); //halaman isian formulir ????
Route::post('/formulir/proses', [PegawaiController :: class, 'proses']); //action forms ?????

// route blog
Route::get('/blog',[BlogController ::class, 'home']);
Route::get('/blog/tentang', [BlogController ::class , 'tentang']);
Route::get('/blog/kontak', [BlogController ::class , 'kontak']);
