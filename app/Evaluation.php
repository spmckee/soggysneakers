<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [];

    public function entry()

    {
        return $this->belongsTo(Entry::class);
    }
}
