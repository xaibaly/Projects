<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowUsersAjaxController;

use Illuminate\Http\Request;
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
use Illuminate\Support\Facades\Auth;



Route::post('store-user', [ShowUsersAjaxController::class, 'store'])->name('store-user');

Route::post('edit-user', [ShowUsersAjaxController::class, 'edit'])->name('edit-user');

Route::post('delete-user', [ShowUsersAjaxController::class, 'destroy'])->name('delete-user');

Route::get('show_users_datatable', [ShowUsersAjaxController::class, 'index'])->name('show_users_datatable');





Route::get('/',[LoginController::class, 'index'])->name('index');

Route::get('/login',[LoginController::class, 'login'])->name('login');

Route::get('/register',[LoginController::class, 'register'])->name('register');

Route::get('/dashboard',[LoginController::class, 'dashboard'])->name('dashboard');

Route::post('register_user', [LoginController::class, 'register_user'])->name('register_user');

Route::post('login_user', [LoginController::class, 'login_user'])->name('login_user');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');



