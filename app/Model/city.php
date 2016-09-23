<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    public $table = 'cities';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo('App\Model\country','country_id');
    }
}
