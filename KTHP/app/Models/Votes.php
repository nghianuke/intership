<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $table = "vote";
    protected $guarded = ['id'];
    
}
