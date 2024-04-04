<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeContoller;
use App\Http\Controllers\Admin\CategoryController;

Route::get("/", [HomeContoller::class,"index"])->name("admin.home");
Route::resource('categories', CategoryController::class)->names('admin.categories');
