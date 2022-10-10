<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('dashboard');
});
Route::prefix('category')->group(function () {
    Route::get('/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/index',[CategoryController::class,'index'])->name('category.index');
    Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

});
Route::prefix('post')->group(function () {

    Route::get('/create/{category}',[PostController::class,'create'])->name('post.create');
    Route::get('/index',[PostController::class,'index'])->name('post.index');

});
Route::prefix('product')->group(function () {
    Route::get('/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/index',[ProductController::class,'index'])->name('product.index');
    Route::delete('/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

});
    // Route::get('/edit/{postCategory}',[CategoryController::class,'edit'])->name('category.edit');
    // Route::put('/update/{postCategory}',[CategoryController::class,'update'])->name('category.update');

    // Route::delete('/destroy/{postCategory}',[CategoryController::class,'destroy'])->name('category.destroy');



