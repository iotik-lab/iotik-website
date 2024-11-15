<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RecordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(AuthController::class)
    ->name('api')
    ->group(function () {
        Route::post('login', 'login')->name('login');
    });

Route::post('/create-record',[RecordController::class,'apiCreate']);
