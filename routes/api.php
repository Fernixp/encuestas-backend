<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SurveyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/surveys', SurveyController::class);
Route::apiResource('/questions', QuestionController::class);
Route::apiResource('/options', OptionController::class);
Route::apiResource('/answers', AnswerController::class);

