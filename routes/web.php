<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembuatanSuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TamplateController;
use App\Http\Controllers\DashboardController;
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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
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
Route::resource('tamplateSurat', TamplateController::class);
// Route::get('/tamplateSurat', [TamplateController::class, 'index']);
Route::post("tamplateSurat/update/{id}", [TamplateController::class, 'update']);
Route::get('/TamplateSurat/tambah', [TamplateController::class, 'tambah']);
Route::post('/TamplateSurat/simpan-surat', [TamplateController::class, 'proses_simpan']);

/** Surat */
Route::resource('PembuatanSurat', PembuatanSuratController::class);
Route::get('/PengajuanSurat', function () {
    return view('surat.pengajuansurat');
});

Route::get('/tambahSurat', [PembuatanSuratController::class, 'tambahsurat']);
Route::get('/isi-surat/{id}', [PembuatanSuratController::class, 'isi_surat']);
Route::get('surat/cetak-surat/{id}', [PembuatanSuratController::class, 'cetak_surat']);