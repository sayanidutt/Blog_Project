<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($user){
        //echo "$user Hello from controller";
        return ['name'=>'Sayani','age'=>24];
    }
}
