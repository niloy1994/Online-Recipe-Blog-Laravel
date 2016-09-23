<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class procedures extends Model
{
    public $table = 'procedures';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function recipe()
    {
        return $this->belongsTo('App\Model\recipe','recipe_id');
    }
}
