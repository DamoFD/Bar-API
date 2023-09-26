<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarRequest;
use App\Http\Requests\UpdateBarRequest;
use App\Models\Bar;
use App\Http\Resources\BarResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return BarResource::collection(Bar::all());
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
    public function store(StoreBarRequest $request): BarResource
    {
        $bar = Bar::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
        ]);

        return new BarResource($bar);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bar $bar): BarResource
    {
        return new BarResource($bar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bar $bar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarRequest $request, Bar $bar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bar $bar)
    {
        //
    }
}
