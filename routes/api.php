<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\CourseController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// Route::resource('/', UserController::class);

Route::post('/reg' ,[UserController::class,'store']);
Route::post('/login' ,[UserController::class,'login']);
Route::get('/courses' , [CourseController::class,'index']);
Route::get('/show/{course}' , [CourseController::class,'show']);
Route::post('/update/{course}' , [CourseController::class,'update']);
Route::delete('/destroy/{course}' , [CourseController::class,'destroy']);
