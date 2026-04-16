<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FromEIController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/course/{id}', [MainController::class, 'display']);

// 1.creation of basic form -view
// 2.creation of controller with form view
// 3.create route for same
// 4.check 419 page expired
// 5.include security token csrf
// 6.add missing data context in return statement when on value entered in form
// 7.include validation with in-built function
// 8.include error directive inform for showing error
// 9.form repopulation (old input ) in the code
Route::get('/abc', [FromEIController::class, 'show']);
Route::post('/submit', [FromEIController::class, 'showFrom']);
