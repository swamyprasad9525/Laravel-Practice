<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstEIController;
use App\Http\Controllers\InvokableEIController;
use App\Http\Controllers\ResourceEIController;
use App\Http\Controllers\APIEIController;
use App\Http\Controllers\MiddlewareEIController;
use App\Http\Controllers\Globalcontroller;
use App\Http\Controllers\ConstructEIController;
use App\Http\Controllers\Simplecontroller;

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


//constrocter Middleware
Route::get('/constrouct',[ConstructEIController::class,'success']);

//QUESTION:::::::::::::::::::::::::::::::::::::
//create a middleware by a 3 ways custom ,global and controller in 1st one u have to add a contraint on the username
//if username is admin then only it will open the controller function in 2nd middleware u have to give middleware constraints
//as country .is country is india then it will open the controlller function and in 3rd one you have to create a middleware 
//and you have to give constraints together in the controller function and then only it will open the controller function.

//blade templetes
Route::get('/success',function(){
    $age=20;
    return view('success',['age'=>$age]);
});

//php output
Route::get('/success',function(){
    $age=20;
    $name="swami";
    //1
    echo "The age is".$age;
    //2
    var_dump($age);
    var_dump($name);
    //3
    print_r($age);
    print_r($name);

});

//Group prefix with controller
Route::prefix('master')->controller(Simplecontroller::class)->group(function(){

    Route::get('/user','user');
    Route::get('/admin/{$id}','admin');

});

//Group without prefix with controller
Route::controller(Simplecontroller::class)->group(function(){

    Route::get('/user','user');
    Route::get('/admin/{$id}','admin');

});