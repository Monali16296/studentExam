<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller {

    //
    public function getEmployeeList() {
        $a = Employee::with('Code')->get();

//        foreach($a as $b) {
//            print_r("Employee id = ".$b->id."<br/>");
//            print_r("Employee name = ".$b->name."<br/>");
//            print_r("Employee creation date = ".$b->created_at."<br/>");
//            print_r("Employee updation date = ".$b->updated_at."<br/>");
//            echo "=======================<br/>";
//            print_r("Code id = ".$b->Code->id."<br/>");
//            print_r("Code = ".$b->Code->code."<br/>");
//            print_r("foreign employee id = ".$b->Code->employee_id."<br/>");
//            print_r("Code creation date = ".$b->Code->created_at."<br/>");
//            print_r("Code updation date = ".$b->Code->updated_at."<br/>");
//        }
        return view('forms.employees', compact('a'));
        exit;
    }

}
