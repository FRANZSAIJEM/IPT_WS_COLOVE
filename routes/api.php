<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sprites',[SpriteController::class, 'index']);
Route::get('/sprites/{sprite}',[SpriteController::class,'show']);
Route::post('/sprites',[SpriteController::class, 'store']);
Route::put('/sprites/{sprite}', [SpriteController::class, 'update']);
Route::delete('/sprites/{sprite}',[SpriteController::class, 'destroy']);

Route::get('/materials',[MaterialController::class, 'index']);
Route::get('/materials/{material}',[MaterialController::class,'show']);
Route::post('/materials',[MaterialController::class, 'store']);
Route::put('/materials/{material}', [MaterialController::class, 'update']);
Route::delete('/materials/{material}',[MaterialController::class, 'destroy']);


