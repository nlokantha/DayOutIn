<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['package_id','image'];
    public function Package()
    {
        return $this->belongsTo(Package::class);
    }
}
