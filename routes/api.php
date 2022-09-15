<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('test', TestController::class);
//Route::middleware(['auth:sanctum'])->resource('test', TestController::class);
Route::resource('comment-all', CommentController::class);
Route::resource('categories-all', CategorieController::class);
Route::resource('location-all', LocationController::class);
Route::resource('user-all', UserController::class);
