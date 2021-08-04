<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessors36 extends Model
{
    use HasFactory;
    public $table = "members";
    public function getNameAttribute($value){
        return ucFirst($value);
    }

    public function getAddressAttribute($value){
        return $value.',India';
    }
}
