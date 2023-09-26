<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreartistRequest;
use App\Http\Requests\UpdateartistRequest;
use App\Models\artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreartistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateartistRequest $request, artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artist $artist)
    {
        //
    }
}
