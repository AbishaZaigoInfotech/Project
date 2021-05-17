<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone', 'password','image'
    ];
    public function getNameAttribute($value){
        return ucFirst($value);
    }
}
