<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    public $table = 'countries';
    public $primaryKey = 'id';
    public $timestamps = false;
}
