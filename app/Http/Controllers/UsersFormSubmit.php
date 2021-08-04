<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersFormSubmit extends Controller
{
    //
    function formsubmit(Request $req){
        //return "Your form has been submitted";
        //return $req->input();
        $req->validate([
            'username'=>'required | max:10',
            'password'=>'required | min:5'
        ]);
        return $req->input();
    }
}
