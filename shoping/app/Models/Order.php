<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $table='orders';
    protected $guarded=['id'];
    public function customer(){
    	return $this->belongsTo('App\Models\Customer');
    }
    public function product(){
    	return $this->belongsToMany('App\Models\Product');
    }
    public function order_detail()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
