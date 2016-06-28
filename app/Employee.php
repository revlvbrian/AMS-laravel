<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Employee extends Eloquent
{
    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_mname',
        'employee_lname',
        'age',
        'mobile_number',
        'address',
        'position',
        'employee_image'
    ];
}
