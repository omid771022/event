<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reate extends Model
{


    protected $fillable = ['rateable_id', 'rateable_type', 'rate'];
}
