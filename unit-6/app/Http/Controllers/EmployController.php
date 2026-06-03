<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployController extends Controller
{
    //Query builder for CRUD via form
    public function show(){
        return view('studentform');
    }
    public function insert(Request $request){
        DB::table('employ')->insert([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/read');
    }
    public function read(){
        $data = DB::table('employ')->get();
        return view('read', compact('data'));
    }
    public function edit($id){
        $data1 = DB::table('employ')->where('id', $id)->first();
        return view('edit', compact('data1'));  
    }
    public function update(Request $request, $id){
        DB::table('employ')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/read');
    }
    public function delete($id){
        DB::table('employ')->where('id', $id)->delete();
        return redirect('/read');
    }

}
