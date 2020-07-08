<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $guarded = ['id'];
    // thiet lap moi quan he nguoc lai
    public function user(){
    	return $this->belongTo('App\User');
    }
}
