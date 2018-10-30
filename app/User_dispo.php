<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_dispo extends Model
{
    protected $fillable = [
        'user_id', 'dispo_id'
    ];
}
