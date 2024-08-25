<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;



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
Route::get('apps/pospay', function () {
    return view('aplikasi/pospay');
});

Route::get('apps/posaja', function () {
    return view('aplikasi.posaja');
});

Route::get('office/adiwerna', function () {
    return view('kantor.adiwerna');
});



// Berita
Route::get('berita/1', function () {
    return view('berita.news-details');
});

Route::get('berita/2', function () {
    return view('berita.news-details1');
});

Route::get('berita/3', function () {
    return view('berita.news-details2');
});

Route::get('berita/4', function () {
    return view('berita.news-details3');
});

Route::get('berita/5', function () {
    return view('berita.news-details4');
});

Route::get('berita/6', function () {
    return view('berita.news-details5');
});

Route::get('berita/7', function () {
    return view('berita.news-details6');
});

Route::get('berita/8', function () {
    return view('berita.news-details7');
});

Route::get('/kinerja', function () {
    return view('kinerja.kinerja');
});
