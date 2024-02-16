<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'home'])->name("homepage");

//Rotte Prodotti
//index
Route::get('/products', [ProductController::class, 'index'])->name("products_index");
//create
Route::get('/product/create', [ProductController::class, 'create'])->name("product_create");
