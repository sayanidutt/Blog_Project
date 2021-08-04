<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController23 extends Controller
{
    //
    function uploadfile(Request $req){
        //return "File is uploaded";
        return $req->file('file')->store('docs');
    }
}
