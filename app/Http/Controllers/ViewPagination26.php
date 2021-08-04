<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagination26;

class ViewPagination26 extends Controller
{
    //
    function view(){
        $data = Pagination26::paginate(5);
        return view('pagination26',['members'=>$data]);
    }
}
