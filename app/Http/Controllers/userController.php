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
        // return User::all();
        return view('index');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required | regex:/^[a-zA-Z]/u',
            'email'=>'required | regex:/^[a-zA-Z0-9]+@[a-zA-Z]/u',
            'phone'=>'required | regex:/^[0-9]/u',
            'password'=>'required | min:5'
        ]);

        User::create($request->all());

        return redirect()->route('index')
                         ->with('success','Registered successfully');
    }
}
