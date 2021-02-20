<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'title',
         'desc',
        'location',
        'date_time',
    ];
}
