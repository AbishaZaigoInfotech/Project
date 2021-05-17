<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AccessorController extends Controller
{
    //
    function index(){
        return User::all();
    }
}
