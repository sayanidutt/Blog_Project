<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFilewithAPIController56 extends Controller
{
    //
    function upload(Request $req){
        $result = $req->file('file1')->store('apiDocs');
        return ["result"=>$result];
    }
}
