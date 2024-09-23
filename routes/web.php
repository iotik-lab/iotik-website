<?php

use App\Http\Controllers\IncubatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::resource('incubator', IncubatorController::class);