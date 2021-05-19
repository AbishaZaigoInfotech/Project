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
    // public function getCompany(){
    //     return $this->hasMany('App\Models\Company');
    // }
    public $timestamps=false;
    public function setNameAttribute($value){
        $this->attributes['name']="Mr. ".$value;
    }
    public function setAddressAttribute($value){
        $this->attributes['address']=$value. ", India ";
    }
}
