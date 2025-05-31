<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Index
    public function index(){
        return "Hello Student! I am Hassan";
    }

    // About
    public function about($name, $id){
        return view('aboutus', compact('name', 'id'));
    }
}
