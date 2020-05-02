<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $timestamps = true;

    public $dates = ['deleted_at'];

    protected $connection = 'mysql';

    protected $fillable = ['title', 'user_id', 'body'];
}
