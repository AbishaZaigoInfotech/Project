<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function getData(Request $req){
        return $req->input();
    }
}
