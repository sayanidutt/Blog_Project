<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MultipleDBModel;

class MultipleDBController45 extends Controller
{
    //
   
    function list(){
        //return DB::connection('mysql2')->table('products')->get();
        return MultipleDBModel::all();
    }
}
