<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    //
    function index(){
        // return Member::find(2)->getCompany;
        // $member = new Member;
        // $member->name="John";
        // $member->address="Chennai";
        // $member->save();
        return DB::table('members')->join('companies', 'members.id', '=', 'companies.member_id')
        ->select('members.*')
        ->get();
    }
}
