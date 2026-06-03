<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\EIcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [EmployController::class, 'show']);
Route::post('/insert', [EmployController::class, 'insert']);
Route::get('/read', [EmployController::class, 'read']);
Route::get('/delete/{id}', [EmployController::class, 'delete']);
Route::get('/edit/{id}', [EmployController::class, 'edit']);
Route::post('/update/{id}', [EmployController::class, 'update']);



// step1:open xampp server, turn on apache and mysql server
// step2: open phpmyadmin
// step3: open .env file->update db name, uncomment from line 23 to 28 , database connection should be mysql, save the file
// step4: create migration -php artisan make:migration create_student_table
// step5: php artisan migrate -for migrating columns
// step6: create seeder -StudentSeeder -add madatory import
// use Illuminate\Support\Facades\DB; //mandatory for using DB facade
// step7: open databaseseeder from seeder folder, call your created seeder
// step8: run php artisan db:seed

Route::resource('abc', EIcontroller::class); //resource will call all the methods of controller automatically based on the request type and url pattern