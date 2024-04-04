<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeContoller;

Route::get("/", [HomeContoller::class,"index"])->name("home");
