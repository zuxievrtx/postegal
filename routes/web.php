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

Route::get('/', function () {
    return view('landing/index');
});

Route::get('/galery', function () {
    return view('landing/galery');
});

Route::get('/office', function () {
    return view('landing/office');
});

// Apps

Route::get('/pospay', function () {
    return view('aplikasi/pospay');
});

Route::get('apps/posaja', function () {
    return view('aplikasi.posaja');
});
