<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    protected $table = 'product_image';
    protected $guarded = ['id'];

    public function product(){
    	return $this->belongTo('App\Models\Product');
    }
}
