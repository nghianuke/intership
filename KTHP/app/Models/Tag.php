<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $table="tags";
    protected $guarded=['id'];
     public function product()
    {
    	return $this->belongsToMany('App\Models\Product','product_tag','tag_id','product_id');
    }

}
