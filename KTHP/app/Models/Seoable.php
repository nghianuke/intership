<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seoable extends Model
{
    protected $table = 'seoable';
    protected $guarded = ['id'];
	// khai bao moi quan he da hinh
	public function seoble()
    {
        return $this->morphTo();
    }
}
