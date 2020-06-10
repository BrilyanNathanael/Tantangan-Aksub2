<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'age', 'position', 'company_id',
    ];

    public function company()
    {
        return $this -> belongsTo('App\Company');
    }
}
