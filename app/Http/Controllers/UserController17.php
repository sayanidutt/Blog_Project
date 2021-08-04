<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController17 extends Controller
{
    //
    function index(){
        //echo "Hello from user controller";
        return DB::select("select * from users");
    }
}
