<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $table = 'admins';
    public $primaryKey = 'id';
    public $timestamps = false;
}
