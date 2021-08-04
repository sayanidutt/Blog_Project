<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    function viewLoad(){
        //return view('userblade',['person'=>['Priya','Shyam','Raja']]);
        //return view('userblade',['person'=>'Priya']);
        $data = ['Srija','Shohini','Rahul'];
        return view('userblade',['personall'=>$data]);
    }
}
