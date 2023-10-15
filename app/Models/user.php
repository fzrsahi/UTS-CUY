<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $guarded = ['id'];
    
    public function history()
    {
        return $this->hasMany(history::class);
    }
}
