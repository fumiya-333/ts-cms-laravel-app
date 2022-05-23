<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auths\LoginController;

Route::get('/', [LoginController::class, 'show']);
Route::post('/', [LoginController::class, 'login']);
