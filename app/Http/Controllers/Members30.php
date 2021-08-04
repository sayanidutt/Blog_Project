<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members30 extends Controller
{
    //
    function dboperation(){
        /*
        return DB::table('members')
        //->where('id',4)
        ->where('address','Kolkata')
        ->get(); */
        //return (array)DB::table('members')->find(6);
        //return DB::table('members')->count();
        //return DB::table('members')
        
        /*
        ->insert([
            'name'=> 'surya',
            'age'=> '27',
            'address'=> 'ABC'
        ]
        );*/
        //->where('id',4)
        /*
        ->update([
            'name'=> 'surya',
            'age'=> '27',
            'address'=> 'Sealdah'
        ]
        );*/
        //->where('id',4)->delete();

        $data= DB::table('members')
        ->get();
        $result = json_decode($data, true);
        return view('member30',['members'=>$result]);
    }
}
