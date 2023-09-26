<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'user_id',
        'artist_id',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
