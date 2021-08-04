<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController19 extends Controller
{
    //
    function index(){
        //echo "API data will be here";
        $collection = Http::get("https://reqres.in/api/users?page=1");
        return view('user19',['collection'=>$collection['data']]);
    }
}
