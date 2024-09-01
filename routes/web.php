<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::middleware(['auth'])->group(function () {
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
});