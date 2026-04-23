<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestingEIMail; //mandatory to import
use Illuminate\Support\Facades\Mail; //mandatory to import for sending mail

class EmailEIcontroller extends Controller
{
    //
    public function send(){
        $data=[
            'name'=>'swamiprasad',
            'subject'=>'refer the mail',
            ];
        Mail::to('kolliswami784@gmail.com')->send(new TestingEIMail($data));
        return "mail sent successfully";
    }
}
