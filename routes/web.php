<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('product', ProductController::class);
Route::get('site', [SiteController::class, 'index']);
