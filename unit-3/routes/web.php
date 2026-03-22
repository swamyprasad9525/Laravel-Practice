<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstEIController;

Route::get('/', function () {
    return view('welcome');
});


//STEP 1: Create a controller using artisan command
//step2:open your created controller and add a method to it
//step3: import your controoler in web.php
//step4: make route for controller
//step5: open your browser and check the output
Route::get('/firsteicontroller', [FirstEIController::class, 'display']);    