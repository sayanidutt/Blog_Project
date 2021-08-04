<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;
//use App\Models\Employee;

class OneToManyRelationController extends Controller
{
    //
    function index(){
        return Emp::find(2)->getmemberdetail;
    }
}
