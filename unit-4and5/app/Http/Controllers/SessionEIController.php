<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionEIController extends Controller
{
    public function login(Request $request){
        //adding or setting session value to form input field
        $request->session()->put('name', $request->input('user'));
        return redirect('/form');
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/loginform');
    }

}
