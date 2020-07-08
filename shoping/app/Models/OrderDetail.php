<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    
    protected $table='order_details';
    protected $guarded=['id'];
     public function customer()
    {
        return $this->belongTo('App\Models\Customer');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }  

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
