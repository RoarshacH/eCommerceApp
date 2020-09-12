<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/store', [ListController::class, 'index'])->name('list');
Route::get('/store/{product}', [ListController::class, 'show'])->name('product');

Route::get('/cart', [CartController::class, 'index'])->name('cart');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
