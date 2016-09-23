<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public $table = 'blogs';
    public $primaryKey = 'id';
    public $timestamps = false;
}
