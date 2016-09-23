<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class blog_image extends Model
{
    public $table = 'blog_image';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function blog()
    {
        return $this->belongsTo('App\Model\blog','blog_id');
    }
}
