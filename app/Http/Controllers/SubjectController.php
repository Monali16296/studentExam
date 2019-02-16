<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    //
    public function getSubjects() {
       
        $info = Subject::get();
        
        return view('forms.subjects', compact('info'));
    }
}
