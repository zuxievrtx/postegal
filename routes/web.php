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

// Berita
Route::get('berita/1', function () {
    return view('berita.news-details');
});

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
