<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deletedata28;

class DeletedataController28 extends Controller
{
    //Retrieve All Data
    function showdata(){
        $data = Deletedata28::all();
        return view('deletedata28',['members'=>$data]);
    }
    //Delete Data
    function delete($id){
        $data = Deletedata28::find($id);
        $data->delete();
        return redirect('display');
    }
    //Update Data
    function displaydata($id){
        $data = Deletedata28::find($id);
        return view('edit29',['data'=>$data]);
    }

    function update(Request $req){
        
        $data = Deletedata28::find($req->id);
        $data->name = $req->name;
        $data->age = $req->age;
        $data->address = $req->address;
        $data->save();
        return redirect('display');
        //return $req->input();

    }
}
