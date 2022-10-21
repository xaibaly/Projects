<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::get('/products', [ProductController::class, 'index'])->name('get_products');
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

Route::group( ['middleware'=>['auth:sanctum'] ] , function () {
    Route::put('/products/edit/{id}', [ProductController::class, 'update']);
    Route::post('/products', [ProductController::class, 'store'])->name('store-product');
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});
