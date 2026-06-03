<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EI;//mandatory import
class EIcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //READ THE CONTENT
        $data=EI::all();
        return view('readdb',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //It will open studentform
        return view('studentformdb');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store acts as i
        EI::create([
        'name'=>$request->name,
        'email'=>$request->email
        ]);
        return redirect('/abc');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=EI::find($id);
        return view('showdb',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data1=EI::find($id);
        return view('editdb',compact('data1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data1=EI::find($id);
        $data1->update([
        'name'=>$request->name,
        'email'=>$request->email
        ]);
        return redirect('/abc');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data1=EI::find($id);
        $data1->delete();
        return redirect('/abc');
    }
}
