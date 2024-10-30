<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Endpoint untuk pengguna
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

// Endpoint untuk posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

// Endpoint untuk menghitung geometri
Route::post('/persegi-panjang', [App\Http\Controllers\Api\PersegiPanjangController::class, 'hitung']);
Route::post('/segitiga', [App\Http\Controllers\Api\SegitigaController::class, 'hitung']);
Route::post('/lingkaran', [App\Http\Controllers\Api\LingkaranController::class, 'hitung']);
Route::post('/kubus', [App\Http\Controllers\Api\KubusController::class, 'hitung']);
Route::apiResource('/forms', App\Http\Controllers\Api\Form\FormController::class);