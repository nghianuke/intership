<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table='products';
    protected $guarded=['id'];

    public function brand(){
    	return $this->belongsto('App\Models\Brand');
    }
    public function category(){
    	return $this->belongsto('App\Models\Category');
    }
    public function order(){
    	return $this->belongsToMany('App\Models\Order');
    }
    
    public function order_detail()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }

}
