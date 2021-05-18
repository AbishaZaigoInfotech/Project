<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    //
    function index(){
        // return Member::find(2)->getCompany;
        $member = new Member;
        $member->name="John";
        $member->address="Chennai";
        $member->save();
    }
}
