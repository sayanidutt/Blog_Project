<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class UserController18 extends Controller
{
    //
    function getdata(){
        return Employee::all();
    }
}
