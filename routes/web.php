<?php

use App\Http\Controllers\UtamaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\PengaturangarisController;
// use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingpengunjungController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ UtamaController::class, "index_view" ]);

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('/kamera', [ KameraController::class, "index_view" ])->name("kamera");
    Route::view('/kamera/new', "pages.kamera.kamera-new")->name('kamera.new');
    Route::view('/kamera/edit/{kameraId}', "pages.kamera.kamera-edit")->name('kamera.edit');

    Route::get('/pengaturangaris', [ PengaturangarisController::class, "index_view" ])->name("pengaturangaris");
    Route::view('/pengaturangaris/new', "pages.pengaturangaris.pengaturangaris-new")->name('pengaturangaris.new');
    Route::view('/pengaturangaris/edit/{pengaturangarisId}', "pages.pengaturangaris.pengaturangaris-edit")->name('pengaturangaris.edit');

    Route::get('/setting', [ SettingController::class, "index_view" ])->name("setting");
    Route::view('/setting/new', "pages.setting.setting-new")->name('setting.new');
    Route::view('/setting/edit/{settingId}', "pages.setting.setting-edit")->name('setting.edit');

    // Route::get('/pengunjung', [ PengunjungController::class, "index_view" ])->name("pengunjung");
    // Route::get('/pengunjung/reset', [ PengunjungController::class, "reset_pengguna" ])->name("pengunjung.reset");
    // Route::get('/pengunjung/tambah/{lantai}/{jumlah}', [ PengunjungController::class, "tambah_pengguna" ])->name("pengunjung.tambah");
    // Route::get('/pengunjung/kurang/{lantai}/{jumlah}', [ PengunjungController::class, "kurang_pengguna" ])->name("pengunjung.kurang");

    Route::get('/settingpengunjung', [ SettingpengunjungController::class, "index_view" ])->name("settingpengunjung");
    Route::view('/settingpengunjung/new', "pages.settingpengunjung.settingpengunjung-new")->name('settingpengunjung.new');
    Route::view('/settingpengunjung/edit/{settingpengunjungId}', "pages.settingpengunjung.settingpengunjung-edit")->name('settingpengunjung.edit');
    Route::get('/settingpengunjung/reset', [ SettingpengunjungController::class, "reset_pengguna" ])->name("settingpengunjung.reset");
});
