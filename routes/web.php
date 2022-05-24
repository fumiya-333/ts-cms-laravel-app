<?php

use Illuminate\Support\Facades\Route;
use App\Libs\AppConstants;
use App\Http\Controllers\Auths\LoginController;
use App\Http\Controllers\Auths\CreateController;

Route::get('/', [LoginController::class, 'show']);
Route::get(AppConstants::ROOT_DIR_USERS_CREATE_PRE, [CreateController::class, 'show']);
Route::post('/', [LoginController::class, 'login']);
Route::post(AppConstants::ROOT_DIR_USERS_CREATE_PRE, [CreateController::class, 'createPre']);
