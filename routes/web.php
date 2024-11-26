<?php

use App\Http\Controllers\AuthCotroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\IncubatorController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leanding_page.home');
});

Route::get('/login', [AuthCotroller::class, 'index'])->name('login');
Route::post('/login', [AuthCotroller::class, 'authenticate'])->name('authenticate');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('incubator', IncubatorController::class);
Route::resource('device', DeviceController::class);
Route::resource('record', RecordController::class);

Route::controller(ImagesController::class)->name('images.')->group(function () {
    Route::get('/images/create/{incubator}', 'create')->name('create');
    Route::post('/images/{device}/preview', 'preview')->name('preview');
    Route::post('/images/{device}/led', 'led')->name('led');
});
