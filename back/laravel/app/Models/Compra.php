<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public function session()
    {
        return $this->belongsTo(Sessions::class, 'sessions_id');
    }
}
