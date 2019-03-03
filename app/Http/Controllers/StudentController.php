<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    //
    public function studentInfo() {
        //$info = Student::find('2')->subjects;
        
        $info = Student::get();
        
//     DB::enableQueryLog();
//        $count = Student::leftjoin('student_subjects', 'id', '=', 'student_id')
//                ->groupBy('student_id')->count();
//        
//                dd(DB::getQueryLog());exit;
//        
//        echo '<pre>';
//    foreach ($info as $a) {
//        print_r($a);
//        exit;
//    }
        
        /*
         * inserting new record in db
         */
        //Student::insert(['name'=>'hi']);
        
        return view('forms.registration', compact('info'));
    }
}
