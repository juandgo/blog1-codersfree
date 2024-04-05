<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeContoller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

Route::get("/", [HomeContoller::class,"index"])->name("admin.home");
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('tags', TagController::class)->names('admin.tags');
