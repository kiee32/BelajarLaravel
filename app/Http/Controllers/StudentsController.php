<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('Admin.students', [
            'title' => 'Data Students',
            'students' => $students
        ]);
    } 

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'classroom' => 'required',
        ]);

        Student::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'classroom' => $request->classroom,
        ]);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }
}
