<?php
use Illuminate\Support\Facades\Route;

Route::get('time-now', \Viettqt\Time\Controllers\InspirationController::class);

Route::get('time', [\Viettqt\Time\Controllers\InspirationController::class, 'getTime']);
