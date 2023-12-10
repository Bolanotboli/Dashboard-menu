<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [App\Http\Controllers\produkControllers::class, 'index']);
Route::get('/produk/edit/{id}', [App\Http\Controllers\produkControllers::class, 'edit']);
Route::delete('/produk/destroy/{id}', [App\Http\Controllers\produkControllers::class, 'destroy']);
