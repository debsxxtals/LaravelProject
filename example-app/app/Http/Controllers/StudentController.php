<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('courses')->get();
        return view('students.index', compact('students'));
    }

    public function show($id)
    {
        $student = Student::with('courses')->findOrFail($id);
        return view('students.show', compact('student'));
    }
}
