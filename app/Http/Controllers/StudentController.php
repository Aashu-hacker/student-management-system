<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   $teachers = Teacher::all();
        $students = Student::with('teacher')->paginate(10); // Adjust pagination as needed
        return view('students.index', ['students' => $students, 'teachers' => $teachers]);
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('students.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string|max:255',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);

        Student::create($request->all());
        return redirect()->route('home');
    }

    public function edit(Student $student)
    {
        $teachers = Teacher::all();
        return view('students.edit', compact('student', 'teachers'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string|max:255',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);

        $student->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('home');
    }
}
