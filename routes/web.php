<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentivicationController; // Make sure the controller is properly imported


Route::get('/login', [AuthentivicationController::class, 'login'])->name('login'); // Use array notation for controller actions in Laravel 8+
