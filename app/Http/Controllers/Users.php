<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function getData(Request $req){
        $req->validate([
            'name'=>'required | max:10 | regex:/^[a-z]/u',
            'password'=>'required | min:5'
        ]);
        return $req->input();
    }
}
