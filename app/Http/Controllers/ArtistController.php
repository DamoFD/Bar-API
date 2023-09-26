<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\ArtistResource;
use Illuminate\Http\Response;

class ArtistController extends Controller
{
    /**
     * Display All Artists
     */
    public function index(): AnonymousResourceCollection
    {
        return ArtistResource::collection(Artist::all());
    }

    /**
     * Store Artist
     */
    public function store(StoreArtistRequest $request): ArtistResource
    {
        $artist = Artist::create([
            'name' => $request->input('name'),
            'user_id' => auth()->user()->id,
        ]);

        return new ArtistResource($artist);
    }

    /**
     * Show single Artist
     */
    public function show(artist $artist): ArtistResource
    {
        return new ArtistResource($artist);
    }

    /**
     * Update Artist
     */
    public function update(UpdateArtistRequest $request, artist $artist): ArtistResource
    {
        $artist->update([
            'name' => $request->input('name'),
        ]);

        return new ArtistResource($artist);
    }

    /**
     * Delete Artist
     */
    public function destroy(artist $artist): Response
    {
        $this->authorize('delete', $artist);
        $artist->delete();
        return response(null, 204);
    }
}
