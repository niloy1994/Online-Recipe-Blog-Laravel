<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $table = 'users';
    public $primaryKey = 'id';
    public $timestamps = false;
}
