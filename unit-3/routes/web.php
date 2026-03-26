<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstEIController;
use App\Http\Controllers\InvokableEIController;
use App\Http\Controllers\ResourceEIController;
use App\Http\Controllers\APIEIController;
use App\Http\Controllers\MiddlewareEIController;
use App\Http\Controllers\Globalcontroller;

Route::get('/', function () {
    return view('welcome');
});


//STEP 1: Create a controller using artisan command
//step2:open your created controller and add a method to it
//step3: import your controoler in web.php
//step4: make route for controller
//step5: open your browser and check the output
Route::get('/firsteicontroller', [FirstEIController::class, 'display']);    

Route::get('/xyz/{id}', InvokableEIController::class);
Route::resource('abc', ResourceEIController::class,);
Route::apiResource('api', APIEIController::class);

//step1:create controller middlewareEIController using artisan command
//step2:return anything inside display method of controller
//step3:open web.php -import created controller and give route to the controller
//step4:create middleware with syntax php artisan make:middleware EIMiddleware
//step5:In EImiddleware,set constraints in the function
//step6:Open app.php of bootstrap folder , there you have to register your middleware with alias name
//step7:add middleware in route of controller
//step8:run your url 
Route::get('/middleware', [MiddlewareEIController::class, 'display'])->middleware('checkage');
Route::get('/home',[Globalcontroller::class,'privacy']);

//Template (yield,section)


Route::get('/login', function () {
    return view('Login');
});
Route::get('/logout', function () {
    return view('Logout');
});