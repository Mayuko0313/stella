<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductDetailController;

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

Route::get('/productList/{sex_id}', [ProductListController::class, 'index'])->name('productList');

Route::get('/productDetail/{product_id}', [ProductDetailController::class, 'index'])->name('productDetail');
Route::post('/productDetail', [ProductDetailController::class, 'addCart'])->name('addCart');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/cart/remove', [CartController::class, 'remove'])->name('remove');

Route::get('/buyProcess', function () {
    return view('pages.buyProcess');
})->name('buyProcess');

Route::get('/confirm', function () {
    return view('pages.confirm');
})->name('confirm');

Route::get('/addProduct', [AddProductController::class, 'index'])->name('addProduct');

Route::post('/addProduct', [AddProductController::class, 'addPost'])->name('addPost');

require __DIR__ . '/auth.php';
