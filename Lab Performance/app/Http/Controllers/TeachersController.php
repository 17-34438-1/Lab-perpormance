<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;



use App\Teacher;

use View;
class TeachersController extends Controller
{
  public function InsertAllDataTeachers(){
$teacher= new Teacher;
$teacher-> teachers_name= Input::get('teachers_name');
$teacher-> classteacher_of = Input::get('classteacher_of');
$teacher-> salary = Input::get('salary');
$teacher-> save();


return view('displayteacherpage');
  }	  //
}
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
