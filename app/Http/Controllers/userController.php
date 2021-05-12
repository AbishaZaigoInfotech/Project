<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;


class UserController extends Controller
{
    //
    function index(){
        // return DB::select("select * from users");
        return User::all();
    }
}
