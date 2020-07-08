<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    protected $table = "product_tag";
    protected $guarded=['id'];
    public function tag(){
    	return $this->belongsto('App\Models\Tag');
    }

    public function product(){
    	return $this->belongsToMany('App\Models\Product','product_tag','product_id','tag_id');
    }
}
