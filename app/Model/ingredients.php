<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    public $table = 'ingredients';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function recipe()
    {
        return $this->belongsTo('App\Model\recipe','recipe_id');
    }
}
