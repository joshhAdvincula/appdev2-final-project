<?php

use App\Http\Controllers\SubjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//laravel sanctum use to protect this data


// Route::group(['middleware' => ['auth:sanctum']], function(){

//     Route::post('/users', [UserController::class, 'store']);
//     Route::put('/users/{id}', [UserController::class, 'update']);
//     //update the users
//     Route::delete('/users/id', [UserController::class, 'destroy']);
// });


Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
Route::post("/logout", [AuthController::class, "logout"])->middleware('auth:sanctum');


Route::get('/users', [UserController::class, 'index']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::get('/users/search/{name}', [UserController::class, 'search']);
//\\Route::apiResource('users', AuthController::class);
