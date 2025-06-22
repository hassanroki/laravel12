<?php
namespace App\Http\Controllers;

use App\Http\Requests\TeacherAddRequest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
    public function store(TeacherAddRequest $request)
    {
        $imgPath = null;
        if ($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('photos', 'public');
        }

        // Create user first
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'user_type' => 2, // 2 = teacher
        ]);

        // Create teacher linked to user
        $teacher          = new Teacher();
        $teacher->user_id = $user->id;
        $teacher->name    = $request->name;
        $teacher->email   = $request->email;
        $teacher->dob     = $request->dob;
        $teacher->age     = $request->age;
        $teacher->gender  = $request->gender;
        $teacher->scores  = $request->scores;
        $teacher->image   = $imgPath;
        $teacher->save();

        session()->flash('success', 'Teacher created successfully!');
        return redirect()->route('teacher.index');
    }

    // Edit
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        Gate::authorize('updateTeacher', $teacher);
        return view('teacher.edit', compact('teacher'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        Gate::authorize('updateTeacher', $teacher);
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
        if ($teacher->image) {
            Storage::disk('public')->delete($teacher->image);
        }
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
