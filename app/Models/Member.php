<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'qualification', 'users_id'
    ];  
    public function getCompany(){
        return $this->hasOne('App\Models\Company');
    }
}
