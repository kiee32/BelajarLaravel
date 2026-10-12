<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'Tentang Kami';
        $content = 'Ini adalah halaman yang berisi informasi tentang aplikasi kami.';

        return view('Admin.about', compact('title', 'content'));
    }
}
