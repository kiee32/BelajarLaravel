<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();
        
        $classrooms = Classroom::all();

        return view('/admin/Students.students', [
            'students' => $students,
            'classrooms' => $classrooms,
            'title' => 'Daftar Students',
            'subtitle' => 'Daftar semua students yang tersedia'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'classroom_id' => 'required',
            'address' => 'required',
        ]);

        Student::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'classroom_id' => $request->classroom_id,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }
}
