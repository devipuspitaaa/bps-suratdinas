<?php

use App\Http\Controllers\LoginController;
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
route::get('/',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');

Route::get('/sdm', function () {
    return view('sdm.index');
});

Route::get('/pegawai', function () {
    return view('pegawai.index');
});



Route::get("/pengujian-template", function() {

    return view('percobaan');
});

Route::get("pembuatan-password", function() {

    echo Hash::make("pegawai123");
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
