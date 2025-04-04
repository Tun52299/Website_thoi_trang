<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', ProductController::class . '@index')->name('test.index');

//Lấy dữ liệu sản phẩm
Route::get('/test2', [ProductController::class, 'list']);
Route::get('/test-eager-loading', [ProductController::class, 'listEagerLoading']);
