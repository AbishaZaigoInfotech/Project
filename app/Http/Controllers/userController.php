<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;


class UserController extends Controller
{
    //
    public function index(){
        // return DB::select("select * from users");
        // return User::all();
        $users = User::orderBy('id','desc')->paginate(5);
        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required | regex:/^[a-zA-Z]/u',
            'email'=>'required | regex:/^[a-zA-Z0-9]+@[a-zA-Z]/u',
            'phone'=>'required | regex:/^[0-9]/u',
            'password'=>'required | min:5',
            'image'=>'required | mimes:csv,txt,xlx,xls,pdf,jpg,gif | max:2048'
        ]);

        // User::create($request->all());
        $path = $request->file('image')->store('public/images');
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->image = $path;
        $user->save();

        return redirect()->route('users.index')
                         ->with('success','Registered successfully');
    }

    public function show(User $user){
        return view('users.show', compact('user'));
    }

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $request->validate([

        ]);
        $user->update($request->all());
        return redirect()->route('users.index')
                         ->with('success','User details updated successfully');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index')
                         ->with('success','User deleted successfully');
    }
}
