<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table="products";
    protected $guarded=['id'];
     public function category(){
    	return $this->belongsto('App\Models\categories');
    }

    public function tag()
    {
    	return $this->belongsToMany('App\Models\Tag','product_tag','product_id','tag_id');
    } 
    public function seo()
    {
        return $this->morphMany('App\Models\Seoable','seoble');
    }
}
