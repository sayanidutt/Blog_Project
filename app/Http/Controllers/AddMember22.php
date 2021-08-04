<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember22 extends Controller
{
    //
    function add(Request $req){
        $data =  $req->input('username');
        $req->session()->flash('user',$data);
        return redirect('add');
    }
}
