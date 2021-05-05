<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\EmployeeDetail;

class Employee extends Model
{
    //
    public function employee_details()
    {
        return $this->hasOne('App\EmployeeDetail', 'employee_id');
    }
}
