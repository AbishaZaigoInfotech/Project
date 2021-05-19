<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    //
    function index(){
        $data= Member::all();
        return view('list',['members'=>$data]);
    }
}
