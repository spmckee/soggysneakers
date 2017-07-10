<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entry extends Authenticatable
{
    protected $fillable = [

    ];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
    
}