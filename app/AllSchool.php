<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllSchool extends Model
{
    protected $fillable = [
        'schoo_name', 'school_address', 'lab_super', 'contact_email', 'status', 'school_code',
    ];
}
