<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teacher')->get();
        $teachers = Teacher::all(); 

        return view('admin.Subjects.Subjects', [
            'subjects' => $subjects,
            'teachers' => $teachers,
            'title' => 'Subjects',
            'subtitle' => 'Daftar semua mata pelajaran'
        ]);
    }

    public function create()
    {
        $teachers = Teacher::all();

        return view('admin.Subjects.Create', [
            'teachers' => $teachers,
            'title' => 'Add Subject',
            'subtitle' => 'Form tambah mata pelajaran'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'teacher_id' => 'required|exists:teachers,id',
        ], [
            'name.required' => 'Nama mata pelajaran wajib diisi.',
            'teacher_id.required' => 'Guru pengampu wajib dipilih.',
            'teacher_id.exists' => 'Guru yang dipilih tidak valid.',
        ]);

        Subject::create([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('subjects.index')->with('success', 'Subject berhasil ditambahkan!');
    }

    public function show(Subject $subject)
    {
        //
    }

    public function edit(Subject $subject)
    {
        //
    }

    public function update(Request $request, Subject $subject)
    {
        //
    }

    public function destroy(Subject $subject)
    {
        //
    }
}
