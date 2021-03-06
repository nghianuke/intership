<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table='brands';
    protected $guarded=['id'];

    public function product(){
    	return $this->hasMany('App\Models\Product');
    }
}
