<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\IncubatorController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
Route::resource('incubator', IncubatorController::class);
Route::resource('device', DeviceController::class);
Route::resource('record', RecordController::class);