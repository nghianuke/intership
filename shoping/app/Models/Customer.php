<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $table='customers';
    protected $guarded=['id'];
    public function order(){
    	return $this->HasMany('App\Models\Order');
    }
}
