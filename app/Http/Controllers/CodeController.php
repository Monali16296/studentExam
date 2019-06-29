<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use Illuminate\Support\Facades\DB;

class CodeController extends Controller {

    //
    public function getCodeList() {
        //$a = Code::with('Employee')->get();
        $a = Code::find(1)->Employee;

//        print_r("Employee id = " . $a->id . "<br/>");
//        print_r("Employee name = " . $a->name . "<br/>");
//        print_r("Employee creation date = " . $a->created_at . "<br/>");
//        print_r("Employee updation date = " . $a->updated_at . "<br/>");
        return view('forms.codes', compact('a'));
    }

}
