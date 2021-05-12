<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function viewLoad(){
        $data=['anil', 'peter', 'sam'];
        return view('users',['users'=>$data]);
    }
}
