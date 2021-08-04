<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostAPIModel;
use PhpParser\Node\Expr\PostDec;
use PhpParser\Node\Expr\PostInc;

use function PHPUnit\Framework\isEmpty;
use Validator;

class PostAPIController extends Controller
{
    //
    function insert(Request $req){
        $member = new PostAPIModel();
        $member->name = $req->name;
        $member->age = $req->age;
        $member->address = $req->address;
        $result = $member->save();
        if($result){
            return ["Result"=>"Data has been added"];
        }
        else{
            return ["Result"=>"Operation failed"];
        }

    }
    function update(Request $req){
        $member = PostAPIModel::find($req->id);
        $member->name = $req->name;
        $member->age = $req->age;
        $member->address = $req->address;
        $result = $member->save();
        if($result){
            return ["Result"=>"Data has been updated"];
        }
        else{
            return ["Result"=>"Operation failed"];
        }
        //return ["result"=>"data is updated"];
    }
    function delete($id){
        $member = PostAPIModel::find($id);
        $result = $member->delete();
        if($result){
        return ["Result"=>"Data has been deleted"];
        }
        else{
            return ["Result"=>"Delete operation is failed"];
        }
    }
    function search($name){
        $result = PostAPIModel::where("name","like","%".$name."%")->get();
        if(count($result)){
            return $result;
        }
        else{
            return ["Result"=>"No data is found"];
        }
    }

    function testData(Request $req){
        //return ["x"=>"y"];
        $rules = array(
            "age"=>"required|min:1|max:2"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            //return $validator->errors();
            return response()->json($validator->errors(),401);
        }
        else{
            $member = new PostAPIModel();
            $member->name = $req->name;
            $member->age = $req->age;
            $member->address = $req->address;
            $result = $member->save();
            if($result){
                return ["Result"=>"Data has been added"];
            }
            else{
                return ["Result"=>"Operation failed"];
            }
        }
    }
}
