<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    //
    public function getSubjects() {
       
        $info = Subject::get();
        
        /*
         * eager loading 
         */
        //$info = Subject::with('student')->get();
        
        /*
         * eager loading on specific column
         */
        //$info = Subject::with('student:id,name')->get();
        /*
         * retrieve subjects having at least one student
         */
//        $info = Subject::has('student')->get();
//        echo '<pre>';
//        print_r($info);
//        exit;
        
        /*
         * student is relation and name is column name of 'student_form' table
         */
//        $info = Subject::whereHas('student', function($query){
//            $query->where('name','like','Mo%');
//        })->get();
//        echo '<pre>';
//        print_r($info);
//        exit;
        
        /*
         * only 1 student having name like "Mo%"
         */
//        $info = Subject::whereHas('student', function($query){
//            $query->where('name','like','Mo%');
//        }, '=', 1)->get();
//        echo '<pre>';
//        print_r($info);
//        exit;

        /*
         * subjects don't have any students
         */
//        $info = Subject::doesntHave('student')->get();
//        echo '<pre>';
//        print_r($info);
//        exit;

        /*
         * count no of students
         */
//        $info = Subject::withCount('student')->get();
//        echo '<pre>';
//        foreach ($info as $a) {
//            print_r($a->student_count);
//        }
//        exit;
        
        
        return view('forms.subjects', compact('info'));
    }
}
