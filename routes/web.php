<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;





Route::resource('login',LoginController::Class);
