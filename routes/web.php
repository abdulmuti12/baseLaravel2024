<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentivicationController; // Make sure the controller is properly imported

Route::get('/', function () {

    dd(333);
    // return view('welcome');
});

// Define the route for the login method of AuthentivicationController
Route::get('login', [AuthentivicationController::class, 'login']); // Use array notation for controller actions in Laravel 8+
