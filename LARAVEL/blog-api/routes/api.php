<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//Rutas de las Tareas API
Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);

Route::middleware('auth:sanctum')->group( function(){
    Route::post('logout',[UserController::class,'logout']);

    Route::get('posts', [PostController::class,'index']);
    Route::post('posts', [PostController::class,'store']);
    Route::put('posts/{id}', [PostController::class,'update']);
    Route::delete('posts/{id}', [PostController::class,'destroy']);


});