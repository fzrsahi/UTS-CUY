<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected $guarded = ['id'];
    
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function item()
    {
        return $this->belongsTo(product::class);
    }
    public function supplier()
    {
        return $this->belongsTo(supplier::class);
    }
}
