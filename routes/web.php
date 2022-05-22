<?php

use Illuminate\Support\Facades\Route;

use App\Constants\AppConstants;
use App\Http\Controllers\Auths\LoginController;

Route::get('/', [LoginController::class, 'show']);
