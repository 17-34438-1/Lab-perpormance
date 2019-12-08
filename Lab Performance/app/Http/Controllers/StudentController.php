<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Student;
use View;
class StudentController extends Controller
{
   public function InsertAllDataStudents(){
   $student = new Student;
   $student->student_name= Input::get('student_name');
   $student->student_class = Input::get('student_class');
   
   $student->student_age = Input::get('student_age');
   $student->class_teacher =Input::get('class_teacher');
   
   $student->save();
   
   return view('displaystudentpage');
   }	   //
}
