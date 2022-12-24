<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Powner extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    protected $fillable = ['fname','lname','email','nic','contact','address','image','password','repassword'];
}
