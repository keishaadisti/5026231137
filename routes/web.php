<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/frontend', function () {
    return view('frontend');
});
