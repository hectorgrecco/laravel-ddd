<?php

use Illuminate\Support\Facades\Route;
use App\Application\Controllers\UserController;

Route::controller(UserController::class)->group(function () {
    Route::get('/users/{id}', 'getById');
    Route::get('/users/email/{email}', 'getByEmail');
    Route::get('/users/token/{token}', 'getByToken');
});
