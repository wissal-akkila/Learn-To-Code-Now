<?php

use App\Http\Controllers\AskAiController;
use Illuminate\Support\Facades\Route;


Route::post('apiKey', [AskAiController::class, 'ask']);
 