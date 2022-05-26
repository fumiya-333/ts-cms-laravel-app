<?php

use Illuminate\Support\Facades\Route;
use App\Libs\AppConstants;
use App\Http\Controllers\Users\LoginController;
use App\Http\Controllers\Users\CreatePreController;
use App\Http\Controllers\Users\CreateController;
use App\Http\Controllers\Users\PasswordResetPreController;

Route::get('/', [LoginController::class, 'show']);
Route::get(AppConstants::ROOT_DIR_USERS_CREATE_PRE, [CreatePreController::class, 'show']);
Route::get(AppConstants::ROOT_DIR_USERS_PASSWORD_RESET_PRE, [PasswordResetPreController::class, 'show']);

Route::post('/', [LoginController::class, 'login']);
Route::post(AppConstants::ROOT_DIR_USERS_CREATE_PRE, [CreatePreController::class, 'exec']);
Route::post(AppConstants::ROOT_DIR_USERS_PASSWORD_RESET_PRE, [PasswordResetPreController::class, 'exec']);

Route::match(['get','post'], AppConstants::ROOT_DIR_USERS_CREATE . '/{email_verify_token}', [CreateController::class, 'show']);
