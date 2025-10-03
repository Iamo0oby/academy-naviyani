<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainPageController;

Route::get('\mainPage', [MainPageController::class, 'index']);
