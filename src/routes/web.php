<?php

use Bhagaskara\Inspire\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('inspire', [InspirationController::class, 'index']);
