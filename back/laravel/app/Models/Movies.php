<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    public function sessions()
    {
        return $this->hasMany(Sessions::class, 'peli_id');
    }
}
