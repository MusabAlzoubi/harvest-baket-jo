<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::controller(StoreController::class)->group(function () {
    Route::get('/', 'home')->name('store.home');
    Route::get('/shop', 'shop')->name('store.shop');
    Route::get('/cart', 'cart')->name('store.cart');
    Route::post('/cart/add/{product}', 'addToCart')->name('store.cart.add');
    Route::post('/cart/update/{product}', 'updateCart')->name('store.cart.update');
    Route::post('/cart/remove/{product}', 'removeFromCart')->name('store.cart.remove');
    Route::get('/chackout', 'checkout')->name('store.checkout');
    Route::get('/contact', 'contact')->name('store.contact');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
});
