<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    //
    function index(){
        $data= Member::paginate(2);
        return view('list',['members'=>$data]);
    }
}
