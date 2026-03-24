<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceEIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "This is index method of resource controller";
        // return response()->json([
        //     "name"=>"John Doe",
        //     "email"=>"johndoe@example.com"
        // ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "The value of id is: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
