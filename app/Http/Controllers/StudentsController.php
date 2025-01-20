<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $data = Students::all();

        return view('students.index', ['students' => $data]);
    }
}
