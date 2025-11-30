<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SospedController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\BansosController;


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('login.submit');
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| ADMIN (auth + admin only)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/about', fn() => view('about'))->name('about');
    Route::get('/profile', fn() => view('profile'))->name('profile');
    Route::get('/rekap', fn() => view('rekap'))->name('rekap');

    Route::resource('berita', BeritaController::class);
    Route::resource('sosped', SospedController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('bansos', BansosController::class);

});


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTE
|--------------------------------------------------------------------------
*/
Route::get('/', [LandingController::class, 'index'])->name('landing.landing');
Route::get('/more', [MoreController::class, 'index'])->name('more');

Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan');
Route::post('/pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
