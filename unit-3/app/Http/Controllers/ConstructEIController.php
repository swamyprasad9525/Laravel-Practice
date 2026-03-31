<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructEIController extends Controller
{
    //
    public function __construct(){
        $this->middleware('checkingage'); //here we are adding middleware
    }
    public function success(){
        return response("You have succesfully enterd");
    }
}
