<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    protected $table = 'loan_applications';
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
