<?php

use Illuminate\Support\Facades\Route;
use NehalPatel\FirstPackage\Http\Controllers\HelloController;

Route::get(config('first-package.route'), [HelloController::class, 'index']);