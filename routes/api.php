<?php

use App\Http\Controllers\QuestionsController;
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

Route::get('/questions',[QuestionsController::class,'index']);
Route::get('/questions/{id}',[QuestionsController::class,'show']);

Route::delete('/questions/{id}',[QuestionsController::class,'destroy']);


Route::post('/questions',[QuestionsController::class,'store']);
Route::put('/questions/{id}',[QuestionsController::class,'update']);




