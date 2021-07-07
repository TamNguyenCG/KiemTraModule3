<?php

use App\Http\Controllers\StoreController;
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

Route::get('/',[StoreController::class,'index'])->name('stores.list');
Route::get('stores',[StoreController::class,'create'])->name('stores.create');
Route::post('stores',[StoreController::class,'store'])->name('stores.store');
Route::get('/{id}/edit',[StoreController::class,'edit'])->name('stores.edit');
Route::post('/{id}/edit',[StoreController::class,'update'])->name('stores.update');
Route::get('/{id}/delete',[StoreController::class,'delete'])->name('stores.delete');
Route::get('/search',[StoreController::class,'search'])->name('stores.search');

