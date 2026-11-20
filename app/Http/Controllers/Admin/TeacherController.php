<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('Admin.teacher.Teacher', [
            'teachers' => $teachers,
            'subjects' => $subjects,
            'title' => 'Daftar Teachers',
            'subtitle' => 'Daftar semua teacher yang tersedia'
        ]);
    }

  
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|string|max:50|unique:teachers,niy',
            'subject_id' => 'required|exists:subjects,id',
            'start_date' => 'required|date',
        ]);

        Teacher::create([
            'name' => $request->name,
            'niy' => $request->niy,
            'subject_id' => $request->subject_id,
            'start_date' => $request->start_date,
        ]);


        return redirect()->route('teachers.index')->with('success', 'Data teacher berhasil ditambahkan!');
    }
}
