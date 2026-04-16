<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadEIController extends Controller
{
    //
    public function show()
    {
        return view('uploadEI');
    }
    public function upload(Request $response){
        $response->validate([
            'file'=>'required|mimes:pdf,docx,txt'
        ]);
        $file=$response->file('file');
        echo "The file name is:<br>".$file->getClientOriginalName(); //it shows that file as retrive 
        $file->store('mydata');
        echo "The file is stored in mydata folder";
    }
}
