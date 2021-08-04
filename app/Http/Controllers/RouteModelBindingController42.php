<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RouteModelBindingModel42;

class RouteModelBindingController42 extends Controller
{
    //
    function index(RouteModelBindingModel42 $key){
        return $key;
    }
}
