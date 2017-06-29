<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'end', 'website', 'phone', 'map', 'address', 'short_info', 'detailed_info',
        ];
}
