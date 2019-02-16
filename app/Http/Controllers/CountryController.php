<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    //
    public function getCountryPosts() {
        $info = Country::get();
        
        return view('forms.countryPost', compact('info'));
    }
}
