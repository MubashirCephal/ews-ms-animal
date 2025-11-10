<?php

use App\Http\Middleware\CheckUserClaims;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::any('/ping', function () { 
    return response()->json(['pong' => Inspiring::quotes()[rand(0, 41)]]);
})->middleware(CheckUserClaims::class);