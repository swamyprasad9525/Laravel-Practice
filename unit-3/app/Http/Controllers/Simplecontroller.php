<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simplecontroller extends Controller
{
    public function user(){
        // return response("Hi i am user");
        return view('dashbord');
    }
    // public function admin($id){
    //     return "Hi i am admin".$id;
    // }
    // public function techer($id){
    //     return "Hi i am techer".$id;
    // }
}
