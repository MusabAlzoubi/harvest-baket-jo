<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('store.index');
})->name('store.home');

Route::get('/shop', function () {
    return view('store.shop');
})->name('store.shop');

Route::get('/cart', function () {
    return view('store.cart');
})->name('store.cart');

Route::get('/checkout', function () {
    return view('store.checkout');
})->name('store.checkout');

Route::redirect('/chackout', '/checkout', 301);

Route::get('/contact', function () {
    return view('store.contact');
})->name('store.contact');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
});
