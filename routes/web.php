<?php

use Illuminate\Support\Facades\Route;

use App\Utils\AppConstants;
use App\Http\Controllers\Auths\LoginController;

Route::get('/', [LoginController::class, 'show']);
