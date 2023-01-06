<?php

use Illuminate\Support\Facades\Route;
use Tomicato\Posts\Http\Controllers\PostController;


Route::get('/posts', [PostController::class, 'index']);
