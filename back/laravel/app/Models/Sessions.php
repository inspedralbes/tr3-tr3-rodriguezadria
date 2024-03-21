<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;

    public function movie()
    {
        return $this->belongsTo(Movies::class, 'peli_id');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'sessions_id');
    }
}
