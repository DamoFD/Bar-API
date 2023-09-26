<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\ArtistResource;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return ArtistResource::collection(Artist::all());
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
    public function store(StoreArtistRequest $request)
    {
        $artist = Artist::create([
            'name' => $request->input('name'),
            'user_id' => auth()->user()->id,
        ]);

        return new ArtistResource($artist);
    }

    /**
     * Display the specified resource.
     */
    public function show(artist $artist): ArtistResource
    {
        return new ArtistResource($artist);
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
    public function update(UpdateArtistRequest $request, artist $artist)
    {
        $artist->update([
            'name' => $request->input('name'),
        ]);

        return new ArtistResource($artist);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artist $artist)
    {
        $this->authorize('delete', $artist);
        $artist->delete();
        return response(null, 204);
    }
}
