<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function aliases()
    {
        $this->hasMany('App\Alias');
    }

    public function image()
    {
        $this->hasOne('App\Image');
    }

    public function status()
    {
        $this->belongsTo('App\Status');
    }
}
