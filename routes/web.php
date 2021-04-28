<?php

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/makan', function () {
    return view('user.menu.makanan');
});

Route::get('/minum', function () {
    return view('user.menu.minuman');
});

Route::get('/event', function () {
    return view('user.menu.event');
});

Route::get('/about', function () {
    return view('user.menu.about');
});

// ========================================================

// *********************HALAMAN ADMIN*********************

Route::get('/kd-admin', function () {
    return view('admin.indexadmin');
});

// ------------Menu

Route::resource('makan', 'App\Http\Controllers\MakananController');

Route::get('/adminminum', function () {
    return view('admin.adminmenu.menu.minuman');
});

// ------------Event
Route::get('/eventadmin', function () {
    return view('admin.adminmenu.event');
});

// ------------Pengunjung
Route::get('/pesan', function () {
    return view('admin.adminmenu.pengunjung.pemesanan');
});

Route::get('/testi', function () {
    return view('admin.adminmenu.pengunjung.testimoni');
});

// ------------Pengaturan
Route::get('/galeri', function () {
    return view('admin.adminmenu.pengaturan.galeri');
});

Route::get('/tampil', function () {
    return view('admin.adminmenu.pengaturan.tampilan');
});

Route::get('/tentang', function () {
    return view('admin.adminmenu.pengaturan.tentang');
});

// *******************************************************