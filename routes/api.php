<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('bukus', BukuController::class);

Route::get('kategoris', [KategoriController::class, 'index']);
Route::post('kategoris', [KategoriController::class, 'store']);
Route::get('kategoris/{id}', [KategoriController::class, 'show']);
Route::put('kategoris/{id}', [KategoriController::class, 'update']);
Route::delete('kategoris/{id}', [KategoriController::class, 'destroy']);


Route::get('bukus/search', [BukuController::class, 'search']);
