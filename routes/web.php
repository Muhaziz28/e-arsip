<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/news/{slug}', [BerandaController::class, 'berita'])->name('news.detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');

    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::post('/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('/kegiatan/delete/{id}', [KegiatanController::class, 'delete'])->name('kegiatan.delete');
    Route::get('/kegiatan/detail/{slug}', [KegiatanController::class, 'detail'])->name('kegiatan.detail');
    Route::post('/kegiatan/update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');

    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/delete/{id}', [BeritaController::class, 'delete'])->name('berita.delete');
    Route::get('/berita/detail/{slug}', [BeritaController::class, 'detail'])->name('berita.detail');
    Route::post('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');

    // get list berita datatable
    Route::get('/berita/getBeritaList', [BeritaController::class, 'getBeritaList'])->name('berita.getBeritaList');

    // get list kegiatan datatable
    Route::get('/kegiatan/getKegiatanList', [KegiatanController::class, 'getKegiatanList'])->name('kegiatan.getKegiatanList');
});
