<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
