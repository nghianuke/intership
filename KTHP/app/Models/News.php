<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = ['id'];
    
    public function seo()
    {
        return $this->morphMany('App\Models\Seoable','seoble');
    }
}
