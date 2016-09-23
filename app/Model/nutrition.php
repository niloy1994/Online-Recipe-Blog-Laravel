<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class nutrition extends Model
{
    public $table = 'nutrition';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function recipe()
    {
        return $this->belongsTo('App\Model\recipe','recipe_id');
    }
}