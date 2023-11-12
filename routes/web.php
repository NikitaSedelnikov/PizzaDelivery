<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryView;
use App\Http\Controllers\BasketView;
use App\Http\Controllers\OrderView;

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


Route::get('/', [DeliveryView::class, 'index'])->name('index');
Route::get('/success', [DeliveryView::class, 'indexSuccess'])->name('index-success');
Route::get('/basket', [BasketView::class, 'showBasket'])->name('basket');
Route::delete('/basket', [BasketView::class, 'deleteGoodInBasket'])->name('delete-good');
Route::get('/order', [OrderView::class, 'showOrder'])->name('order');
Route::post('/order', [OrderView::class, 'makeOrder'])->name('make-order');

