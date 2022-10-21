<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManager;

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
Route::get('edit_file',[FileManager::class, 'edit_file'])->name('edit_file');

Route::get('show_edit',[FileManager::class, 'show_edit_file'])->name('show_edit_file');

Route::get('add_file',[FileManager::class, 'add_file'])->name('add_file');

Route::get('add_folder',[FileManager::class, 'add_folder'])->name('add_folder');

Route::get('delete',[FileManager::class, 'delete'])->name('delete');

Route::get('/',[FileManager::class, 'index'])->name('index');

Route::get('/{name}',[FileManager::class, 'index']);


