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

//Adding constrains locally
// Route::prefix('master')->controller(Simplecontroller::class)->group(function(){

//     Route::get('/user','user');
//     Route::get('/admin/{$id}','admin')->where('id','[0-9]+');
//     Route::get('/techer/{$id}','techer')->whereNumber('id') ;

// });

//adding constrains globally
Route::controller(Simplecontroller::class)->group(function(){

    Route::get('/user','user');
    Route::get('/admin/{$id}','admin');
    Route::get('/techer/{$id}','techer') ;

});

//Domin routing
// Route::domain('admin.localhost')->group(function(){

//     Route::get('/uvw',function(){
//         return "Hi i am admin";
//     });
//     Route::get('/qrs',function(){
//             return "Hi i am user";
//     });
// });
//run your url via
//http://admin.localhost:8000/uvw
//http://admin.localhost:8000/qrs

//named route
Route::get('/u',function(){
    return view('hello');
});
Route::get('/dashboard/user/myproject/sample',[Simplecontroller::class,'user'])->name('myuser');
// Route::get('/admin',[FirstEIController::class,'admin']);
// Route::get('/techer',[FirstEIController::class,'techer']);

//create a controller in the controller pass an array values which showse name rollnum whan you add url with rollnum it will display the name 
//create two views in side parent layout and two views out side parent layout ,in the parent laylout there will be navigation wich can be inhereted  by cherent views childern view must contain diffenrt futtenr section 1 fotter is green and anouther is red.

//url Generation
Route::get('/home',function(){
    return view('testingurl');
});

//Generating Frameworks - named route , url , action
Route::get('/user',[Simplecontroller::class,'user']);
Route::get('/data',[Simplecontroller::class,'data']);

//different between seeder and factory
//craete 4 controllers called basic controller ,demo , class,practice controllers inside all controllers y have to create 2 2 functions 
//in 1st cont y have to render 2views called ai and web inthe ai view y have to add inline images of 3 robotes and web view y have to add 
//your profile diteals in italic syntesis for the 2nd controller y have to render 2 views called parent and child there showe case the working of template inheritence 
//in 3rd cintroller y have to render 2 views called placements and teching in placement view y have to showcase 10 students in unorderd list 
//in teching you have to make the use constrains with url end r
//last controller will showe how middilewar is applied  