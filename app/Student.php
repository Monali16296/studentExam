<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "student_form";
    public function subjects() {
        return $this->hasMany('App\Subject');
        
        /*
         * if want to specify foreign key n local key then u can 
         * default cosidered as model name + _id
         */
        //return $this->hasMany('App\Subject', 'student_id', 'id');
    }
}
