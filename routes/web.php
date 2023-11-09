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


Route::get('/', [])->name('index');
Route::post('/', [])->name('get-good');
Route::get('/basket', [])->name('basket');
Route::delete('/basket', [])->name('delete-good');
Route::get('/order', [])->name('order');
Route::post('/order', [])->name('make-order');
