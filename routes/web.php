<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clock', function () {
    return view('closewise');
});

Route::get('/clock1', function () {
    return view('clockwise1');
});

Route::get('/clock2', function () {
    return view('clockwise2');
});

Route::get('/clock3', function () {
    return view('clockwise3');
});




Route::get('/quize', function () {
    return view('quize');
});

Route::get('/quize', [UserController::class,'showQuiz']);

Route::get('/check',[UserController::class,'checkans'])->name('checkanswer');

// Route::get('/timer',[UserController::class,'setTimer']);


Route::get('/testingquiz', function () {
    return view('testingquiz');
});

// get the score 
// Route::get('/showAnswer', [UserController::class, 'showQuiz'])->name('quiz.show');
// Route::post('/quiz/submit', [UserController::class, 'submitAnswer'])->name('quiz.submit');


Route::get('/score', function () {
    return view('score');
});
Route::post('/score', [UserController::class, 'submitAnswer'])->name('score');
