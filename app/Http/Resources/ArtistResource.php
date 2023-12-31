<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Artists',
            'attributes' => [
                'name' => $this->name,
                'songs' => $this->songs->map(function ($song) {
                    return [
                        'id' => (string)$song->id,
                        'name' => $song->name,
                        'url' => $song->url,
                        'creator_id' => (string)$song->user_id,
                        'created_at' => $song->created_at,
                        'updated_at' => $song->updated_at,
                    ];
                })->all(),
                'creator_id' => (string)$this->user_id,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
        ];
    }
}
