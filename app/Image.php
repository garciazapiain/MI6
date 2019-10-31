<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function person()
    {
        $this->hasOne('App\Person');
    }
}
