<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    public function person()
    {
        $this->belongsTo('App\Person');
    }
}
