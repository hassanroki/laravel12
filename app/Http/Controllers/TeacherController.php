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
        })->paginate(10);

        return view('teacher.list', compact('teachers'));
    }

    // Add
    public function add()
    {
        return view('teacher.create');
    }

    // Create
    public function create(Request $request)
    {
        // Validation
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|unique:teachers,email',
            'age'    => 'required|integer|min:1|max:100',
            'dob'    => 'required|date',
            'gender' => 'required|in:m,f',
            'scores' => 'required|integer|min:1|max:100',
        ], [
            'name.required' => 'Please Write Teacher Name',
            'age.max'       => 'Teacher can not be older than 100',
            'email.email'   => 'Please enter a valid email address',
            'email.unique'  => 'This email is already taken',
        ]);

        $teacher         = new Teacher();
        $teacher->name   = $request->name;
        $teacher->email  = $request->email;
        $teacher->dob    = $request->dob;
        $teacher->age    = $request->age;
        $teacher->gender = $request->gender;
        $teacher->scores = $request->scores;
        $teacher->save();

        return redirect()->route('teacher.index');
    }

    // Edit
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit', compact('teacher'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $teacher         = Teacher::findOrFail($id);
        $teacher->name   = $request->name;
        $teacher->email  = $request->email;
        $teacher->dob    = $request->dob;
        $teacher->age    = $request->age;
        $teacher->gender = $request->gender;
        $teacher->scores = $request->scores;
        $teacher->update();

        return redirect()->route('teacher.index');
    }

    // Delete
    public function destroy(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
