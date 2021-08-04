<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    public function getmemberdetail(){
        //One to one
        //return $this->hasOne('App\Models\Myemployee');

        //Many to many
        return $this->hasMany('App\Models\Myemployee');
    }
}
