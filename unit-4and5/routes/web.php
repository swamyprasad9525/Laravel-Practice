<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FromEIController;
use App\Http\Controllers\UploadEIController;

// Route::get('/', function () {
//     return view('welcome');
// });

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

Route::get('/abcd', [UploadEIController::class, 'show']);
Route::post('/upload', [UploadEIController::class, 'upload']);

//localigation (seeing the website in different language)
//1.folder->resoures->lang->pa->message.php
//2.put your content inside
//3.create a view
//4.get the message passed in message.php to home.blade.php
//5.add suitable route for home.blade.php
//6.open .env file change APP_LOCALE=pa
Route::get('/home',function(){
    return view('home');
});
//implement 5 different languages tamil,telugu, marathi, gugarathi, english in your code content moust be your name and age


//dynamic localization
Route::get('/lang/{locale}',function($locale){
    session(['locale'=>$locale]);
    return redirect()->back();
});
//Another way to implement localization dynamically
// Route::get('/', function () {
//     return view('home'); // your blade file
// });

// Route::get('/lang/{locale}', function ($locale) {
//     session(['locale' => $locale]);
//     return redirect('/');
// });

//***sending emails
