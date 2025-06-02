<?php
namespace App\Http\Controllers;

class StudentController extends Controller
{
    // Index
    public function index()
    {
        return "Hello Student! I am Hassan";
    }

    // About
    public function about($name, $id)
    {
        return view('aboutus', compact('name', 'id'));
    }
}
