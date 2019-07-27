<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('registartionForm', 'StudentController@studentInfo');
Route::get('subjectList', 'SubjectController@getSubjects');
Route::get('usersList', 'UserController@getUsers');
Route::get('rolesList', 'RoleController@getRoles');
Route::get('countryList', 'CountryController@getCountryPosts');
Route::get('companyList', 'CompanyController@getCompanyList');

/*
 * try with http://localhost/studentExam/public/companyList/2 and http://localhost/studentExam/public/companyList/3
 */
//Route::get('companyList/{id}', function($id){
//    return App\Company::findOrFail($id);
//});
Route::get('employeeList', 'EmployeeController@getEmployeeList');
Route::get('codeList', 'CodeController@getCodeList');
Route::get('homeList', 'HomeController@getHomeList');
Route::get('windowList', 'WindowController@getWindowList');
//Route::view('welcome', 'welcome', ['name' => 'monali']);

/*
 * optional parameter can be given using ? 
 * if name won't there then default value aa will be passed
 */
//Route::get('uName/{name?}', function($nam='aa') {
//    return $nam;
//});

/*
 * regular expression on id parameter
 * if anything except digits will be passes then 404 error would be generated
 */
//Route::get('userToken/{id}', function($id) {
//    return $id;
//})->where('id', '[0-9]+');

/*
 * Inspecting The Current Route
 */
Route::get('def', 'WindowController@getWindowList2')->name('abc');

/*
 * By default the RouteServiceProvider includes your route files within a namespace group, 
 * allowing you to register controller routes without specifying the full App\Http\Controllers namespace prefix. 
 * but controller is defined in another folder then we can create namespece group for that folder.
 */
Route::namespace('controllerTesting')->group(function() {
    Route::get('ghi', 'NamespaceExampleController@demoNamespace');
});
        