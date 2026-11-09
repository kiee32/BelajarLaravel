<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
   public function index()
{
    $classrooms = Classroom::all();

    return view('Admin.classroom', [
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
        //
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
