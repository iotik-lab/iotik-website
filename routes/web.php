<?php

use App\Http\Controllers\AuthCotroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\IncubatorController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leanding_page.home');
});

Route::get('/login', [AuthCotroller::class, 'index'])->name('login');
Route::post('/login', [AuthCotroller::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthCotroller::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('incubator', IncubatorController::class);
    Route::resource('device', DeviceController::class);
    Route::resource('record', RecordController::class);
    Route::resource('user', UserController::class);
    
    Route::get('/report-export', [RecordController::class, 'reportExport'])->name('report-export');
    
    Route::controller(ImagesController::class)->name('images.')->group(function () {
        Route::get('/images/create/{incubator}', 'create')->name('create');
        Route::get('/images', 'index')->name('index');
        Route::post('/images/{device}/preview', 'preview')->name('preview');
        Route::post('/images/{device}/led', 'led')->name('led');
        Route::post('/images/{incubator}/candling', 'candling')->name('candling');
    });

    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
});
