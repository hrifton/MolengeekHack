<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispo extends Model
{
    
    public function users ()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
