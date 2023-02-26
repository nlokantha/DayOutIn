<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function powner()
    {
        return $this->belongsTo(powner::class);
    }

    public function order()
    {
        return $this->hasMany(order::class);
    }
    public function Photo()
    {
        return $this->hasMany(Photo::class);
    }
}
