<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
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
            'type' => 'Songs',
            'attributes' => [
                'name' => $this->name,
                'url' => $this->url,
                'artist' => [
                    'id' => (string)$this->artist->id,
                    'name' => $this->artist->name,
                    'creator_id' => (string)$this->artist->user_id,
                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at,
                ],
                'creator_id' => (string)$this->user_id,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
        ];
    }
}
