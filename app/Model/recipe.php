<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    public $table = 'recipes';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Model\category','category_id');
    }
    public function country()
    {
        return $this->belongsTo('App\Model\country','country_id');
    }
}
