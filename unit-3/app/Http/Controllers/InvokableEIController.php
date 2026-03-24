<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableEIController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $users=[1=>"A",2=>"b",3=>"c"];
        return $users[$id]?? "oops! user not found";
    }
}
