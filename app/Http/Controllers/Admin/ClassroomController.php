<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
   public function index()
{
    $classrooms = Classroom::with('students')->get();
    return view('Admin.Classroom.Classroom', [
        'classrooms' => $classrooms,
        'title' => 'Classroom',
        'subtitle' => 'Daftar semua ruangan kelas yang tersedia'
    ]);
}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
        ], [
            'name.required' => 'Nama classroom wajib diisi.',
            'major.required' => 'Jurusan wajib diisi.',
        ]);

        Classroom::create([
            'name' => $request->name,
            'major' => $request->major,
        ]);

        return redirect()->back()->with('success', 'Data classroom berhasil ditambahkan!');
    }

    public function show(Classroom $classroom)
    {
        //
    }

    public function edit(Classroom $classroom)
    {
        //
    }

    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    public function destroy(Classroom $classroom)
    {
        //
    }
}
