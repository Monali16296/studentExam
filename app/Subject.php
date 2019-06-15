<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $table = "student_subjects";
    
    
    /*
     * by default foreign key will be considered as relationship name(function name) + _id 
     */
    public function student() {
        return $this->belongsTo('App\Student');
    }  
    
    /*
     * if want to use function name as below then have to specify foreign key
     */
    
//    public function student() {
//        return $this->belongsTo('App\Student', 'student_id');
//    }
    
    
}
