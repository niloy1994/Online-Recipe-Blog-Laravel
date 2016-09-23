<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class recipe_image extends Model
{
    public $table = 'recipe_image';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function recipe()
    {
        return $this->belongsTo('App\Model\recipe','recipe_id');
    }
}
