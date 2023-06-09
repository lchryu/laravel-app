<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);
Route::get('/posts',[PostsController::class, 'index']);
Route::resource('/foods',FoodsController::class);

//Route::get('products', [
//    ProductsController::class,
//    'index'
//])->name('products');

// how to validate "id only integer ?"
Route::get('products/{id}', [
    ProductsController::class,
    'detail'
])->where('id', '[0-9]+');

// how to validate "id only integer"
// Regular Expression
Route::get('products/{productName}/{id}', [
    ProductsController::class,
    'detail'
])->where(['productName' => '[a-zA-Z0-9]+', 'id' => '[0-9]+']);
