<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Savedata27;

class SavedataController27 extends Controller
{
    //
    function save(Request $req){
        $save = new Savedata27();
        $save->name = $req->name;
        $save->age = $req->age;
        $save->address = $req->address;
        $save->save();
        return redirect('adddata27');

    }
}
