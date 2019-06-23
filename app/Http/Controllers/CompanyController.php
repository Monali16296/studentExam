<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\DB;

/*
 * global scope 
 */

//use App\Scopes\AgeScope;
class CompanyController extends Controller {

    //
    public function getCompanyList() {
        $company = Company::with('manager')->get();

        /*
         * remove models which have id 1 and retrieve company names (collection)
         */
//        $names = $company->reject(function($companys) {
//            return $companys->id == 1;
//        })
//        ->map(function ($companys) {
//            return $companys->name;
//        });
//        
//        echo '<pre>';
//        print_r($names);
//        exit;

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

        /*
         * updating record
         */
//        $a = Company::find(3);
//        $a->name = 'cd';
//        $a->save();
//        exit;

        /*
         * inserting new record in db and retriving it . 
         * make sure timestamps columns should be there for using create
         */
//        $a = Company::create(['name'=>'hi']);
//        echo '<pre>';
//        print_r($a);exit;

        /*
         * if want to save and update simultaneously
         */
//        $a = Company::create(['name'=>'cdddd']);
//        $a->fill(['name' => 'abcd']);
//        $a->save();
//        exit;

        /*
         * if record found with same name in db then won't be inserted otherwise new record inserted
         */
//        $a = Company::firstOrCreate(['name' => 'abc']);
//        exit;

        /*
         * same as firstorcreate but have to call save() for save record
         */
//        $a = Company::firstOrNew(['name' => 'abc']);
//        $a->save();
//        exit;        

        /*
         * if want to update existing record or to add new record if not found
         * here name will be updated to aa
         */
//        $a = Company::updateOrCreate(['name' => 'TCS', 'id' => 2], ['name' => 'aa']);
//        exit;

        /*
         * for deleting record
         */
//        $a = Company::find(15);
//        $a->delete();
//        exit;

        /*
         * want to destroy by primary key without retrieving
         */
//        Company::destroy(16);
//        exit;        

        /*
         * mass delete
         */
//        Company::where('id',3)->delete();
//        exit;

        /*
         * deleted columns will also be retrieved.
         */
//        $a = Company::withTrashed()->get();
//        echo '<pre>';
//        print_r($a);
//        exit;

        /*
         * retrieve only deleted records
         */
//        $a = Company::onlyTrashed()->get();
//        echo '<pre>';
//        print_r($a);
//        exit;

        /*
         * want to restore(set deleted_at to null) soft deleted record
         */
//        Company::where('id', 3)->restore();
//        exit;


        /*
         * use of agescope to retrieve id > 1
         */
//        echo '<pre>';
//        print_r(Company::all());
//        exit;

        /*
         * remove global scope for a give query
         */
//        echo '<pre>';
//        print_r(Company::withoutGlobalScope(AgeScope::class)->get());
//        exit;

        /*
         * remove global scope
         * in this age method is defined in company model
         */
//        echo '<pre>';
//        print_r(Company::withoutGlobalScope('age')->get());
//        exit;

        /*
         * removing all global scopes
         */
//        echo '<pre>';
//        print_r(Company::WithoutGlobalScopes()->get());
//        exit;

        /*
         * using local scopes
         */
//        echo '<pre>';
//        print_r(Company::popular()->get());
//        exit;

        /*
         * using dynamic scopes
         */
//        echo '<pre>';
//        print_r(Company::ofType(2)->get());
//        exit;

        /*
         * avg on collection
         */
//        $a = collect([['id' => 1], ['id' => 3]])->avg('id');
//        print_r($a);
//        exit;
//        $a = collect([1, 3, 5, 6])->avg();
//        print_R($a);
//        exit;

        /*
         * chunk method useful for grid view
         */
//        $collection = collect([1, 20, 3, 5, 7, 2, 1]);
//        $chunks = $collection->chunk(4);
//        $a = $chunks->toArray();
//        foreach ($a as $b) {
//           foreach ($b as $c) {
//               echo $c."</br>";
//           }
//        }exit;

        /*
         * The collapse method collapses a collection of arrays into a single, flat collection
         */
//        $collection = collect([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
//        $collapsed = $collection->collapse();
//        echo '<pre>';
//        print_R($collapsed->all());
//        exit;

        /*
         * The combine method combines the values of the collection, as keys, with the values of another array or collection
         */
//        $collection = collect(['name', 'age']);
//        $combined = $collection->combine(['George', 39]);
//        echo '<pre>';
//        print_r($combined->all());
//        exit;

        /*
         * The concat method appends the given array or collection values onto the end of the collection
         */
//        $collection = collect(['john doe']);
//        $concatenated = $collection->concat(['jogn doe'])->concat(['name' => 'johnny doe']);
//        echo '<pre>';
//        print_r($concatenated->all());
//        exit;

        /*
         * The contains method determines whether the collection contains a given item
         */
//        $collection = collect(['name' => 'desk', 'age' => 100]);
//        print_R($collection->contains('desk')); //true
//        print_R($collection->contains('abc')); //false
//        exit;

        /*
         * The count method returns the total number of items in the collection
         */
//        $collection = collect([1, 2, 3, 4, 5]);     
//        print_r($collection->count());
//        exit;

        /*
         * cartesian product
         */
//        $collection = collect([1,2]);
//        $matrix = $collection->crossJoin(['a', 'b']);
//        echo '<pre>';
//        print_r($matrix->all());
//        exit;        

        /*
         * The dd method dumps the collection's items and ends execution of the script
         */
//        $collection = collect(['john doe', 'monu']);
//        echo '<pre>';
//        print_r($collection->dd());
//        exit;

        /*
         *  This method will return the values in the original collection that are not present in the given collection
         */
//        $collection = collect([1, 2, 3, 4, 5]);
//        $diff = $collection->diff([2, 4, 6, 8]);
//        echo '<pre>';
//        print_R($diff->all());
//        exit;

        /*
         * This method will return the key / value pairs in the original collection that are not present in the given collection
         */
//        $collection = collect([
//            'color' => 'orange',
//            'remain' => 6,
//            'type' => 'fruit'
//        ]);
//        $diff = $collection->diffAssoc([
//            'color' => 'yellow',
//            'type' => 'fruit',
//            'remain' => 3,
//            'used' => 6
//        ]);
//        echo '<pre>';
//        print_R($diff->all());
//        exit;

        /*
         * The diffKeys method compares the collection against another collection or a plain PHP array based on its keys
         */
//        $collection = collect([
//            'one' => 10,
//            'two' => 20,
//            'three' => 80
//        ]);
//        $diff = $collection->diffKeys([
//            'one' => 90,
//            'five' => 8,
//            'seven' => 88
//        ]);
//        echo '<pre>';
//        print_r($diff->all());
//        exit;

        /*
         * dump() same as dd() instead of stopping execution
         */
//        $collection = collect(['john', 'jj']);
//        echo '<pre>';
//        print_r($collection->dump());
//        exit;

        /*
         * The each method iterates over the items in the collection and passes each item to a callback:
         */
//        $collection = collect([
//            'name' => 'john',
//            'id' => 2
//        ]);
//        $collection->each(function ($item, $key) {
//            echo $item."===".$key."</br>";
//        });
//        exit;  
        
        /*
         * The eachSpread method iterates over the collection's items, passing each nested item value into the given
         */
//        $collection = collect([['john', 30], ['monu', 23]]);
//        $collection->eachSpread(function($name, $age) {
//            echo $name."==".$age."</br>";
//        });
//        exit;
        
        $collection = collect(['a', 'b', 'a', 'c', 'd', 'b']);
        echo '<pre>';
        print_R($collection->duplicates());
        exit;
        return view('forms.companies', compact('company'));
    }

}
