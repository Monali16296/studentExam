<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //last two are optional parameters
    public function Code() {
        return $this->hasOne('App\Code', 'employee_id', 'id');
    }
}
