<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function loadView($user){
        return view('myuser',['name'=>$user]);
    }
}
