<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $table = 'categories';
    public $primaryKey = 'id';
    public $timestamps = false;
}
