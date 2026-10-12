<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {

        $title = 'Daftar Student';

        $students = [
        ['nis' => '1001', 'name' => 'Ahmad Rizky', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1002', 'name' => 'Budi', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1003', 'name' => 'Citra Rendy', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1004', 'name' => 'Dewi Anggraini', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1005', 'name' => 'Eko Prasetyo', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1006', 'name' => 'Fajar Nugraha', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1007', 'name' => 'Gita Gutawa', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1008', 'name' => 'Hadi Wijaya', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1009', 'name' => 'Indah Permata', 'classroom' => 'XI PPLG 2'],
        ['nis' => '1010', 'name' => 'Joko Susilo', 'classroom' => 'XI PPLG 2'],
    ];

    return view('admin.students', compact('students', 'title'));
    }
}
