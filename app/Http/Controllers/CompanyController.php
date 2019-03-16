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
        
        /*
         * if want to process thousands of record
         */
//        Company::chunk(2,function($flights) {            
//            foreach($flights as $flight) {
//                echo $flight->name;
//            }
//        });
//        exit;
        
        /*
         * cursor only executes a single query which is used when processing large amounts of data
         */
//        foreach (Company::cursor() as $flight) {    
//            echo $flight->name;
//        }
//        exit;
        
        /*
         * finding records with primary key
         */
//        $a = Company::find([1,2]);
//        echo '<pre>';
//        print_R($a);
//        exit;
        
        /*
         * if want to throw an exception if model not found
         */
//        $a = Company::findOrFail(3);
//        print_r($a);
//        exit;
        
        /*
         * counting records
         */
//        print_r(Company::where('id', 1)->count());
//        exit;
        
        /*
         * max price
         */
//        print_r(Company::sum('id'));
//        exit;
        
        /*
         * inserting records. no need to setup timestamps manually
         */
//        $a = new Company;
//        $a->name = 'aa';
//        $a->save();
//        exit;
        return view('forms.companies', compact('company'));
    }
}
