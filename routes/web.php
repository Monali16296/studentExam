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
