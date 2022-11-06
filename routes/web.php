<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;

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

Route::get('/addProduct', [AddProductController::class, 'index'])->name('addProduct');

Route::post('/addProduct', [AddProductController::class, 'addPost'])->name('addPost');

require __DIR__ . '/auth.php';
