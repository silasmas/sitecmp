<?php

namespace App\Http\Controllers;

use App\Models\Faithful;
use Illuminate\Http\Request;

class FaithfulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("site.pages.welcom");
    }
    public function missionnaire()
    {
        return view("site.pages.missionaire");
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
    public function show(Faithful $faithful)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faithful $faithful)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faithful $faithful)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faithful $faithful)
    {
        //
    }
}
