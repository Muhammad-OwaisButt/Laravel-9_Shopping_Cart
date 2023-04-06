<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

    // Admin ROUTES
Route::get('/admin99', function () {return view('admin.add_product_form');});

    // Admin APIES
Route::get('admin99/data', [ProductController::class, 'indexadmin']);

Route::post('admin99/save', [ProductController::class, 'store']);

Route::get('admin99/edit/{id}', [ProductController::class, 'edit']);

Route::post('admin99/update', [ProductController::class, 'update']);

Route::get('admin99/delete/{id}', [ProductController::class, 'destroy']);

    // Products api
Route::get('/products', [ProductController::class, 'index']);

Route::get('/single_product/{id}', [ProductController::class, 'single_product']);

    // Routes for pages
Route::get('/', function () {return view('main');});

Route::get('/check-out', function () {return view('check_out_form');});

    // Cart APIES
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');

Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');

Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');

Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');

Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
