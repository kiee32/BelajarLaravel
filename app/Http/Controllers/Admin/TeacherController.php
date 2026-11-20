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


    public function create()
{
    $subjects = \App\Models\Subject::all();
    return view('admin.teachers.create', compact('subjects'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'niy' => 'required',
        'start_date' => 'required|date',
        'subject_id' => 'required|exists:subjects,id',
    ]);

    Teacher::create([
        'name' => $request->name,
        'niy' => $request->niy,
        'start_date' => $request->start_date,
        'subject_id' => $request->subject_id,
    ]);

    return redirect()->route('teachers.index')->with('success', 'Data guru berhasil ditambahkan.');
}
};
