<?php

use Illuminate\Support\Facades\Route;
//ROUTEING
// // fallback routing
// Route::fallback(function () {
//     return "Better luck next time";
// });

// Route::get('/home/info/number', function () {
//     $numbers = "";

//     for ($i = 20; $i <= 40; $i++) {
//         $numbers .= $i . " ";
//     }

//     return $numbers;
// });

// // prefix routing
// Route::prefix('admin')->group(function () {

//     Route::get('/home', function () {
//         return view('welcome');
//     });

// });

// // group routing without prefix
// Route::group([], function () {

// });


//NAMED ROUTING
//step1: open terminal and create view student
//step2: open web.php and create route to view student, first is welcome and second is student
//view where you show named routes
//step3: write anything inside student view
//step4: open welcome blade and add anchor tag for showing named route working
//step5: Run your code with first url- /welcome

Route::view('/','welcome');//routing to view without controller
//initiation of named route
Route::view('/scai/bloack27/webdev/laravel/int221/ca','student')->name('information');


//PASSING DATA TO VIEW
//First method is associative array
Route::get('/home',function(){
    $courses=["c","c++","java","python"];
    return view('student1',['courses'=>$courses]);
}) ;
//second method is compact
Route::get('/home/c',function(){
$courses=["c","php","c++"];
return view('student1',compact('courses'));
});
//third method is with
Route::get('/home/w',function(){
    $courses=["php","java","c","cpp"];
    return view('student1')->with('courses',$courses);
});



//***Sharing data globally with all views
//step1: create 3 views data1 ,2 and 3
//step2: create corresponding routes for same in web.php
//step3: open app folder under app folder move to provider
//step4: Import use Illuminate\Support\Facades\view; in appserviceprovider
//here it is static data
Route::view('/data1','data1');
Route::view('/data2','data2');
Route::view('/data3','data3');



//ATTACHING HEADERS

//adding headers
Route::get('/adding-headers',function(){
    return response("Header attached")
    ->header('app-name','basicinfo')
    ->header('content-type','RTF')
    ->header('file-disposition','downloadable')
    ->header('cache-info','available');
});

//json response
Route::get('/jsonresponse',function(){
    return response()->json(["name"=>"John Doe","age"=>30,"Role"=>'AP']);
});

//COOKIES IN LARAVEL
//adding cookies
Route::get('/adding-cokies',function(){
    return response('cookies are added')->cookie('name','John Doe',60);
});
//geting cookies data
Route::get('/getting-cookies',function(){
    return Request::cookie('name');
});
//deleting cookies
Route::get('/deleting-cookies',function(){
    return response('cookies are deleted')->cookie(Cookie::forget('name'));
});

//LARAVEL REDIRECTIONS
//redirecting to back
Route::get('/home1',function(){
    return "Hi i am inside home url";
});

Route::get('/about',function(){
    return "about page";
});
Route::get('/secondpage',function(){
    return redirect()->back();
});

//redirecting to another url
Route::get('/home2',function(){
    return "Hi i am inside home2 url";
});

Route::get('/redirecting',function(){
    return redirect('/home2');
});

