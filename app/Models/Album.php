<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
     public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
