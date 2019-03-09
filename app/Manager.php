<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //if primary key of table is other than id name then specify it using $primaryKey var
    protected $primaryKey = 'manager_own_id';
}
