<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::post('/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('/kegiatan/delete/{id}', [KegiatanController::class, 'delete'])->name('kegiatan.delete');
    Route::get('/kegiatan/detail/{slug}', [KegiatanController::class, 'detail'])->name('kegiatan.detail');
});
