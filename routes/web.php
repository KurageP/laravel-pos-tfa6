<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/customers');

Route::get('/customers', [CustomerController::class, 'index'])
    ->name('customers.index');

Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');