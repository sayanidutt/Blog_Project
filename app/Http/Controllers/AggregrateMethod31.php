<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregrateMethod31 extends Controller
{
    //
    function operation(){
        //return DB::table('members')->avg('age');
        //return DB::table('members')->sum('age');
        //return DB::table('members')->min('age');
        //return DB::table('members')->max('age');
        //return DB::table('members')->count('age');
        //return DB::table('members')->max('address');
        return DB::table('members')->min('address');
    }
}
