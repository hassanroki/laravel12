<?php
namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::when($request->search, function ($query) use ($request) {
            return $query->whereAny([
                'name',
                'age',
                'email',
                'dob',
                'scores',
                'gender',
            ], 'like', '%' . $request->search . '%');
        })->get();

        return view('teacher.list', compact('teachers'));
    }
}
