<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\JawabanController;




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

// halaman utama sebelum login/regis belum terbuat
Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
//   controller laman utama cascus 
    Route::resource('user', userController::class)->only(['index']);
// controller fitur kategori
    Route::resource('kategori', KategoriController::class);
//controller profile menu user
    Route::resource('profile', profileController::class)->only(['index','update']);
//controller pertanyaan
    Route::resource('pertanyaan', PertanyaanController::class);
//controller jawaban
    Route::resource('jawaban', JawabanController::class);


});


Auth::routes();






