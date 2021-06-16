<?php

use App\Models\Testimoni;
use App\Models\Kontak;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// =============HALAMAN UTAMA / USERINTERFACE=============

Route::get('index', function () {
    $komen = Testimoni::latest()->get();
    $about = Kontak::select()->get();
    return view('index', compact('komen', 'about'));
});

Route::get('/makanuser', 'App\Http\Controllers\UserController@makanuser');

Route::get('/minumuser', 'App\Http\Controllers\UserController@minumuser');

Route::get('/userfasilitas', 'App\Http\Controllers\UserController@fasilitas');

Route::get('/about', 'App\Http\Controllers\UserController@tentang');

// ========================================================

// *********************HALAMAN ADMIN*********************

Route::resource('kd-admin', 'App\Http\Controllers\AdminController');

// ------------Menu

Route::resource('makan', 'App\Http\Controllers\MakananController');

Route::resource('minum', 'App\Http\Controllers\MinumanController');

// ------------Event
Route::resource('halfasilitas', 'App\Http\Controllers\FasilitasController');

// ------------Pengunjung

Route::resource('testimoni', 'App\Http\Controllers\TertimoniController');

// ------------Pengaturan
Route::resource('galeri', 'App\Http\Controllers\GaleryController');

Route::resource('kontak', 'App\Http\Controllers\KontakController');

// *******************************************************