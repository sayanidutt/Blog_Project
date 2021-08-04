<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetAPIModel;

class GetAPIController extends Controller
{
    //
    function test(){
        return GetAPIModel::all();
    }
}
