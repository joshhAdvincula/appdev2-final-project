<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SubjectsController;
// use App\Http\Controllers\UserSubjectController;
// use App\Http\Controllers\MaterialsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});


// Route::post("/register", [AuthController::class, "register"]);
// Route::post("/login", [AuthController::class, "login"]);
// Route::post("/logout", [AuthController::class, "logout"])->middleware('auth:sanctum');

// //user Routes
// Route::prefix('users')->group(function () {
//     Route::get('/', [UserController::class, 'index']);
//     Route::get('/{id}', [UserController::class, 'show']);
//     Route::put('/{id}', [UserController::class, 'update']);
//     Route::delete('/{id}', [UserController::class, 'destroy']);
//     Route::get('/search/{name}', [UserController::class, 'search']);
// });

// Route::get('/user/{id}/subjects-materials', [UserSubjectController::class, 'show']);

// Route::put('/material/{id}', [MaterialsController::class, 'update']);
// Route::get('/materials', [MaterialsController::class, 'index']);

// Route::get('/subjects', [SubjectsController::class, 'index']);
// Route::put('/subjects/{id}', [SubjectsController::class, 'update']);



