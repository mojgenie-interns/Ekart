<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomepageController;

Route::get('/', [HomepageController::class, 'home']);
