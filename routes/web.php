<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegisterController;
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
route::get('/',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');

/** Register */
route::get('/register',[RegisterController::class,'halamanRegister'])->name('register');

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

Route::get("pembuatan-password", function() {

    echo Hash::make("pegawai123");
});