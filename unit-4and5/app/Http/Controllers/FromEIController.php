<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromEIController extends Controller
{
    //
    public function show(){
        return view('FormEI');
    }
    
    public function showFrom(Request $request){
        
        $request->validate([
            'name'  => 'required|alpha|min:3',
            'email' => 'required|email',
            'phone' => 'required|digits:10'
            ]);
            
        //request data retrieval method 1
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        return "The name is :". ($name ?? 'missing data') . ", Email is : " . ($email ?? 'missing data') . ", Phone is : " . ($phone ?? 'missing data');

        //2.Request data retrieval method -input method
        $name=$request->input(name);
        $email=$request->input(email);
        $phone=$request->input(phone);
        return "The name is :". ($name ?? 'missing data') . ", Email is : " . ($email ?? 'missing data') . ", Phone is : " . ($phone ?? 'missing data');

        //3.via all()
        $data=$request->all();
        return "The name is :". ($data['name'] ?? 'missing data') . ", Email is : " . ($data['email'] ?? 'missing data') . ", Phone is : " . ($data['phone'] ?? 'missing data');


    }
}
