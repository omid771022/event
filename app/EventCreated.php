<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCreated extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

}
