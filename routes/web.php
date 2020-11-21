<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\PengaturangarisController;
use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('/kamera', [ KameraController::class, "index_view" ])->name("kamera");
    Route::view('/kamera/new', "pages.kamera.kamera-new")->name('kamera.new');
    Route::view('/kamera/edit/{noKamera}', "pages.kamera.kamera-edit")->name('kamera.edit');

    Route::get('/pengaturangaris', [ PengaturangarisController::class, "index_view" ])->name("pengaturangaris");
    Route::view('/pengaturangaris/new', "pages.pengaturangaris.pengaturangaris-new")->name('pengaturangaris.new');
    Route::view('/pengaturangaris/edit/{no}', "pages.pengaturangaris.pengaturangaris-edit")->name('pengaturangaris.edit');

    Route::get('/setting', [ SettingController::class, "index_view" ])->name("setting");
    Route::view('/setting/new', "pages.pengaturangaris.pengaturangaris-new")->name('pengaturangaris.new');
    Route::view('/setting/edit/{no}', "pages.pengaturangaris.pengaturangaris-edit")->name('pengaturangaris.edit');
});
