<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ViewMembers25 extends Controller
{
    //
    function show(){
        $data = Member::all();
        return view('memberlist25',['members'=>$data]);
    }
}
