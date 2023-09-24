<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view("student.index", ["students" => $students]);
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', ["students" => $student]);
    }

    public function search(Request $request)
    {
        $output ="";
        $students = Student::where('id', 'LIKE', '%' . $request->search . '%')->get();

        foreach ($students as $student) {
            $output .= ' <tr><td>'
             . $student . '</td>
            </tr>';
    }
        
        return response($output);
    }
}