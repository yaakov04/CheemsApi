<?php

use App\Http\Controllers\Api\V1\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/articles', ArticleController::class)
    ->only('index');
