<?php

use Illuminate\Support\Facades\Route;
use App\Libs\AppConstants;
use App\Http\Controllers\Users\LoginController;
use App\Http\Controllers\Users\CreatePreController;
use App\Http\Controllers\Users\CreateController;
use App\Http\Controllers\Users\PasswordResetController;

Route::get('/', [LoginController::class, 'show']);
Route::get(AppConstants::ROOT_DIR_USERS_CREATE_PRE, [CreatePreController::class, 'show']);
Route::get(AppConstants::ROOT_DIR_USERS_CREATE, [CreatePreController::class, 'show']);
Route::get(AppConstants::ROOT_DIR_PASSWORD_RESET, [PasswordResetController::class, 'show']);

Route::post('/', [LoginController::class, 'login']);
Route::post(AppConstants::ROOT_DIR_USERS_CREATE_PRE, [CreatePreController::class, 'exec']);
Route::post(AppConstants::ROOT_DIR_PASSWORD_RESET, [PasswordResetController::class, 'exec']);

Route::match(['get','post'], AppConstants::ROOT_DIR_USERS_CREATE . '/{email_verify_token}', [CreateController::class, 'show']);
