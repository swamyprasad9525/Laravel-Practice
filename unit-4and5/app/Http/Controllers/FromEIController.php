<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromEIController extends Controller
{
    //
    public function show(){
        return view('FormEI');
    }
    
    //request data retrieval method 1
    public function showFrom(Request $request){
        
        $request->validate([
        'name'  => 'required|alpha|min:3',
        'email' => 'required|email',
        'phone' => 'required|digits:10'
        ]);

        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        return "The name is :". ($name ?? 'missing data') . ", Email is : " . ($email ?? 'missing data') . ", Phone is : " . ($phone ?? 'missing data');
    }
}
