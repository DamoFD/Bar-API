<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use App\Models\Song;
use App\Http\Resources\SongResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class SongController extends Controller
{
    /**
     * Display All Songs
     */
    public function index(): AnonymousResourceCollection
    {
        return SongResource::collection(Song::all());
    }

    /**
     * Store Song
     */
    public function store(StoreSongRequest $request): SongResource
    {
        $song = Song::create([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'user_id' => auth()->user()->id,
            'artist_id' => (int)$request->input('artist_id'),
        ]);

        return new SongResource($song);
    }

    /**
     * Display single Song
     */
    public function show(Song $song): SongResource
    {
        return new SongResource($song);
    }

    /**
     * Update Song
     */
    public function update(UpdateSongRequest $request, Song $song): SongResource
    {
        $song->update([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'artist_id' => (int)$request->input('artist_id'),
        ]);

        return new SongResource($song);
    }

    /**
     * Delete Song
     */
    public function destroy(Song $song): Response
    {
        $this->authorize('delete', $song);
        $song->delete();
        return response(null, 204);
    }
}
