<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $table = 'comment';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function recipe()
    {
        return $this->belongsTo('App\Model\recipe','recipe_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\user','user_id');
    }
}
