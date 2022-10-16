<?php

use App\Http\Controllers\LoginController;
// use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::get('/dashboard', function () {
    return view('dashboard');
});
Auth::routes();

/** Login */
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/',[LoginController::class,'halamanlogin'])->name('login');
route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/sdm', function () {
    return view('sdm.index');
});

/** Pegawai */
Route::resource('pegawai', PegawaiController::class);
Route::get('/pegawai', function () {
    return view('pegawai.index');
});
Route::get('/createPegawai', function () {
    return view('pegawai.create');
});



Route::get("/pengujian-template", function() {

    return view('percobaan');
});

Route::get("pembuatan-password", function() {

    echo Hash::make("pegawai123");
});