<?php

use App\Http\Controllers\UserTaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user_tasks', UserTaskController::class);