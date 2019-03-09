<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\DB;
class CompanyController extends Controller
{
    //
    public function getCompanyList() {
        $company = Company::with('manager')->get();
        
        /*
         * if you want to print sql
         */        
//        DB::enableQueryLog();
//        $company = Company::with('manager')->get();
//        $query = DB::getQueryLog();
//        print_r($query);
        return view('forms.companies', compact('company'));
    }
}
