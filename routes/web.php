<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.top');
});

Route::get('/productList', function () {
    return view('pages.productList');
})->name('productList');

Route::get('/productDetail', function () {
    return view('pages.productDetail');
})->name('productDetail');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/buyProcess', function () {
    return view('pages.buyProcess');
})->name('buyProcess');

Route::get('/confirm', function () {
    return view('pages.confirm');
})->name('confirm');

Route::get('/addProduct', function () {
    return view('pages.addProduct');
})->name('addProduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
