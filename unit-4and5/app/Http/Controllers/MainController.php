<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //CA1: display course name based on course id
    public function display(Request $request)
    {   
    $course=[1=>'c', 2=>'c++', 3=>'c', 4=>'Per1'];
    $id=$request->id;
    $courseName = $course[$id] ?? 'Invalid Course Selected';
    return view('simpleview', ['CoursesID' => $id, 'courseName' => $courseName, 'course' => $course]);  
    }

}
