<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = "cat";

    public function allProducts(){
        return $this->hasMany('\App\Models\Product',"catname","catname");
    }
}
