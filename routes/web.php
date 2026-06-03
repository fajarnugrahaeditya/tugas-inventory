<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth.custom'])->group(function () {
Route::get('/home', function () { return view('home');});
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');
Route::get('/create', [ProductController::class, 'create']);
Route::post('/store', [ProductController::class, 'store']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::post('/update/{id}', [ProductController::class, 'update']);
Route::get('/delete/{id?}', [ProductController::class, 'delete']);
Route::get('/insert', [ProductController::class, 'insert']);
Route::resource('categories', CategoryController::class);});