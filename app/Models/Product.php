<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;

    public function catnameModel(){
        return $this->belongsTo("\App\Models\Cat","catname","catname");
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
