<?php

namespace App\Http\Controllers;
use App\Rules\NameRuleEI;
use Illuminate\Http\Request;

class ValidationEIController extends Controller
{
    //
    public function validate(Request $request){
        $request->validate([
            'name' => ['required', new \App\Rules\NameRuleEI],
            'email' => ['required', new \App\Rules\EmailRuleEI],
        ]);
        return "Validation passed";
    }
}
