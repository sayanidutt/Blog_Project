<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth21 extends Controller
{
    function userLogin(Request $req){
        $data = $req->input();
        $req->session()->put('user21',$data['name']);
        return redirect('profile');
    }

}
