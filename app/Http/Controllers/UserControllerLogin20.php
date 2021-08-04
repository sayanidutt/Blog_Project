<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllerLogin20 extends Controller
{
    //
    function getRequest(Request $req){
        return $req->input();
    }
}
