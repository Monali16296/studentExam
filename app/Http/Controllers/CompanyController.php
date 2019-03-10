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
        
        /*
         * retieving data from database just like get()
         */
//        $company = Company::all();
//        echo '<pre>';
//        print_R($company);exit;
        
        /*
         * for retrieving only desired no of records
         */
//        $company = Company::take(1)->get();
//        echo '<pre>';
//        print_R($company);
//        exit;
        
        
        return view('forms.companies', compact('company'));
    }
}
