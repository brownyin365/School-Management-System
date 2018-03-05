<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //
    public function getAllStudents()
    {
       
      $students = Student::all(); 

       return view("student", compact("students"));
    }
}
