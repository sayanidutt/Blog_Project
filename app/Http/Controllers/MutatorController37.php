<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mutator37;

class MutatorController37 extends Controller
{
    //
    function index(){
        $member = new Mutator37;
        $member->name = "Rohit";
        $member->age = 30;
        $member->address = "Howrah";
        $member->save();
    }
}
