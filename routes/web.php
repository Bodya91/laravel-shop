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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('/cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::post('/cart/add/{id}', [App\Http\Controllers\CartController::class, 'cartAdd'])->name('cartAdd');
Route::post('/cart/remove/{id}', [App\Http\Controllers\CartController::class, 'cartRemove'])->name('cartRemove');

Route::get('/categories', [App\Http\Controllers\MainController::class, 'categories'])->name('categories');
Route::get('/{slug}', [App\Http\Controllers\MainController::class, 'category'])->name('category');

Route::get('/{category}/{product_name?}', [App\Http\Controllers\MainController::class, 'product'])->name('product');
