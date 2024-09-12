<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;

//Route::resource('user', UserController::class);

Route::get('/', function () {
    return view('welcome');
});
