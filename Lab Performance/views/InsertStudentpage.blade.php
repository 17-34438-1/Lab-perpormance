<!--app/views/InsertStudentPage.blade.php-->
{{Form::open(array('action' =>'StudentController@InsertAllDataStudents'))}}
	{{Form::label('student_name','Student Name')}}
	
	{{Form::text('student_name','',array('id' =>'student_name'))}}
	<br>
	
	{{Form::label('student_class', 'Student Class')}}
		{{Form::text('student_class', '', array('id' => 'student_class'))}}
		<br>
		
		{{Form::label('student_age','Student Age')}}
			{{Form::number('student_age','',array('min'=>1,'max'=>150,'id'=>'student_age'))}}
			
	<br>

	{{Form::label('class_teacher','Class Teacher')}}
		{{Form::text('class_teacher','',array('id'=>'class_teacher'))}}
	
	
	<br>
	{{Form::submit('Save')}}
		{{Form::close()}}