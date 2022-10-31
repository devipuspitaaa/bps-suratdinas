<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembuatanSuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TamplateController;
use Illuminate\Routing\Route as RoutingRoute;
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
// Auth::routes();

/** Login */
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/',[LoginController::class,'halamanlogin'])->name('login');
route::get('/logout',[LoginController::class,'logout'])->name('logout');


/** Pegawai */
Route::resource('pegawai', PegawaiController::class);
Route::post("pegawai/update/{id}", [PegawaiController::class, 'update']);

/** Profile */
//Route::resource('profile', ProfileController::class);
Route::get('/profile', function () {
    return view('profile.index');
});

/** Tamplate Surat*/
Route::resource('TamplateSurat', TamplateController::class);
Route::get('/TamplateSurat', function () {
    return view('tamplateSurat.index');
});

/** Surat */
Route::resource('PembuatanSurat', PembuatanSuratController::class);
Route::get('/PengajuanSurat', function () {
    return view('surat.pengajuansurat');
});