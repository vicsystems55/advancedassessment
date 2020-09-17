<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practical extends Model
{
    protected $fillable = [
        'title', 'description', 'subject_area', 'class', 'session', 'term', 'status',
    ];
}
