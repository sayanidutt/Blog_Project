<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessors36;

class Accessors36Controller extends Controller
{
    //
    function index(){
        return Accessors36::all();
        
    }
}
