<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table=['roles'];
    protected $guared=['id'];
    public function users(){
       return $this->belongsTomany('App\User');
    }
}
