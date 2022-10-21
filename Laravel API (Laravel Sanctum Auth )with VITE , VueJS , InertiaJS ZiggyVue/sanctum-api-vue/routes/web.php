<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    if(Auth::user()){
        Auth::user()->tokens()->delete();
        return Inertia::render('Products/Index', [
            'user_name' =>Auth::user()->name,
            'user_api_token' => Auth::user()->createToken('Delete_Products_Token')->plainTextToken,
        ]);
    }else{
        return Inertia::render('Products/Index', [
        ]);
    }
})->name('index');


Route::get('/show_create_product', function () {
    return Inertia::render('Products/Create', [
        'user_name' =>Auth::user()->name,
        'user_api_token' => Auth::user()->createToken('Create_Products_Token')->plainTextToken,
    ]);
})->name('show_create_product');


Route::get('/show_edit_product/{id}', function ($id) {

    return Inertia::render('Products/Edit', [
        'user_name' =>Auth::user()->name,
        'user_api_token' => Auth::user()->createToken('Edit_Products_Token')->plainTextToken,
        'id'=>$id,
    ]);
})->name('show_edit_product');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard1');

Route::get('/a', function () {
    return view('welcome');
})->name('a');


Route::inertia('/products','Products/Index')->name('IndexProducts');


Route::get('/show_login_user', [AuthenticatedSessionController::class , 'create'])->name('show_login_user');
Route::get('/show_register_user', [RegisteredUserController::class , 'create'])->name('show_register_user');

Route::post('/login', [AuthenticatedSessionController::class , 'store'])->name('login');
Route::post('/register', [RegisteredUserController::class , 'store'])->name('register');

Route::get('/logout', [AuthenticatedSessionController::class , 'destroy'])->name('logout');
