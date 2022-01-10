<?php

use App\Http\Controllers\Api\V1\ArticleController;
use App\Http\Controllers\Api\V1\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/articles', ArticleController::class)
    ->only(['index', 'show']);
Route::apiResource('v1', IndexController::class)
    ->only('index');
