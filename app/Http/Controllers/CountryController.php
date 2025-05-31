<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    // list
    public function list(){
        $items = Country::all();
        return $items;
    }
}
