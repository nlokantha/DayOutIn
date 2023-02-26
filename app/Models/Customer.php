<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    // public function order()
    // {
    //     return $this->hasMany(order::class);
    // }
    protected $fillable = ['fname','lname','email','nic','contact','address','password','repassword'];
}