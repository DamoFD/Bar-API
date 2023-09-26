<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarRequest;
use App\Http\Requests\UpdateBarRequest;
use App\Models\Bar;
use App\Http\Resources\BarResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class BarController extends Controller
{
    /**
     * Display All Bars
     */
    public function index(): AnonymousResourceCollection
    {
        return BarResource::collection(Bar::all());
    }

    /**
     * Store Bar
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
     * Display Single Bar
     */
    public function show(Bar $bar): BarResource
    {
        return new BarResource($bar);
    }

    /**
     * Update Bar
     */
    public function update(UpdateBarRequest $request, Bar $bar): BarResource
    {
        $bar->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return new BarResource($bar);
    }

    /**
     * Delete Bar
     */
    public function destroy(Bar $bar): Response
    {
        $this->authorize('delete', $bar);
        $bar->delete();
        return response(null, 204);
    }
}
