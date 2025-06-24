<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriLokerController;

Route::get('/', function () {
    return view('beranda');
    });
Route::get('/profil', function () { 
    return view('profil'); 
    });
Route::get(
    '/kategori-loker',
    [ App\Http\Controllers\LokerController::class, 'list' ]
    );
Route::get(
    '/loker',
    [ App\Http\Controllers\LokerController::class, 'list' ]
    );
Route::get(
    '/kategori-loker/{id}',
    [ App\Http\Controllers\LokerController::class, 'list_kategori' ]
    );
Route::get(
    '/loker/{id}',
    [ App\Http\Controllers\LokerController::class, 'detail' ]
    );
Route::get('/tips-and-tricks', function () {
    return view('tips-and-tricks');
    });