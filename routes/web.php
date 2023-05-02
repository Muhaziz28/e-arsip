<?php

use App\Http\Controllers\ArsipSettingController;
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

    // === route arsip setting ===
    // tingkat perkembangan
    Route::get('/arsip-setting/getTingkatPerkembangan', [ArsipSettingController::class, 'getTingkatPerkembangan'])->name('arsip-setting.getTingkatPerkembangan');
    Route::get('/arsip-setting', [ArsipSettingController::class, 'index'])->name('arsip-setting.index');
    Route::post('/arsip-setting/createTingkatPerkembangan', [ArsipSettingController::class, 'createTingkatPerkembangan'])->name('arsip-setting.createTingkatPerkembangan');
    Route::post('/arsip-setting/showTingkatPerkembangan', [ArsipSettingController::class, 'showTingkatPerkembangan'])->name('arsip-setting.showTingkatPerkembangan');
    Route::put('/arsip-setting/updateTingkatPerkembangan', [ArsipSettingController::class, 'updateTingkatPerkembangan'])->name('arsip-setting.updateTingkatPerkembangan');
    Route::delete('/arsip-setting/deleteTingkatPerkembangan', [ArsipSettingController::class, 'deleteTingkatPerkembangan'])->name('arsip-setting.deleteTingkatPerkembangan');
    // bentuk arsip
    Route::get('/arsip-setting/getBentuk', [ArsipSettingController::class, 'getBentuk'])->name('arsip-setting.getBentuk');
    Route::post('/arsip-setting/createBentuk', [ArsipSettingController::class, 'createBentuk'])->name('arsip-setting.createBentuk');
    Route::post('/arsip-setting/showBentuk', [ArsipSettingController::class, 'showBentuk'])->name('arsip-setting.showBentuk');
    Route::put('/arsip-setting/updateBentuk', [ArsipSettingController::class, 'updateBentuk'])->name('arsip-setting.updateBentuk');
    Route::delete('/arsip-setting/deleteBentuk', [ArsipSettingController::class, 'deleteBentuk'])->name('arsip-setting.deleteBentuk');
    // keterangan arsip
    Route::get('/arsip-setting/getKeterangan', [ArsipSettingController::class, 'getKeterangan'])->name('arsip-setting.getKeterangan');
    Route::post('/arsip-setting/createKeterangan', [ArsipSettingController::class, 'createKeterangan'])->name('arsip-setting.createKeterangan');
    Route::post('/arsip-setting/showKeterangan', [ArsipSettingController::class, 'showKeterangan'])->name('arsip-setting.showKeterangan');
    Route::put('/arsip-setting/updateKeterangan', [ArsipSettingController::class, 'updateKeterangan'])->name('arsip-setting.updateKeterangan');
    Route::delete('/arsip-setting/deleteKeterangan', [ArsipSettingController::class, 'deleteKeterangan'])->name('arsip-setting.deleteKeterangan');
});
