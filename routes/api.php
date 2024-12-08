<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\Api\StatsController;
use App\Http\Controllers\Api\TemperatureController;
use App\Http\Controllers\IncubatorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(AuthController::class)
    ->name('api')
    ->group(function () {
        Route::post('login', 'login')->name('login');
        Route::post('forgot-password', 'forgot')->name('forgot-password');
        Route::post('verify-code', 'verifyCode')->name('verify-code');
        Route::post('reset-password', 'resetPass')->name('reset-pass');
    });

Route::get('/stats/{incubator_id}', [StatsController::class, 'stats']);
Route::get('/stats/{incubator_id}/detail', [StatsController::class, 'statsDetail']);
Route::post('/create-record', [RecordController::class, 'apiCreate']);
Route::get('/temp-threshold/{device_id}', [TemperatureController::class, 'tempThreshold']);
Route::get('/incubators', [IncubatorController::class, 'allIncubators']);
