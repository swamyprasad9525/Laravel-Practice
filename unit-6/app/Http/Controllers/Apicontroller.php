<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apiModel;//import the model

class Apicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return apiModel::all(); //fetch all records from the collection
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=apiModel::create(
            [
                'name'=>$request->name,
                'email'=>$request->email
            ]
        );
        return response()->json($data,201); //return the created record with a 201 status code
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return apiModel::find($id); //fetch a specific record from the collection
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=apiModel::find($id);
        $data->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=apiModel::find($id);
        $data->delete();
        return response()->json(null, 204); //return a 204 status code for successful deletion
    }
}
