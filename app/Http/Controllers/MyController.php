<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return '<h1>Index</h1>';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return '<h1>Create</h1>';
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
    public function show()
    {
        return '<h1>Show</h1>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return '<h1>Edit</h1>';
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
