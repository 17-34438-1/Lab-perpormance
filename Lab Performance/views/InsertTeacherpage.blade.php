<!--app/views/InsertTeacherpage.blade.php-->
 @extends('layouts.master')
@section('content')
 <h3>Add User</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
{{Form::open(array('action' =>'TeachersController@InsertAllDataTeachers'))}}	
    <div class="form-group">
{{Form::label('teachers_name', 'TeacherName')}}


{{Form::text('teachers_name','',array('id' =>'teachers_name'))}}
		   </div>   
		

		
		
	 <div class="form-group">	
	{{Form::label('classteacher_of','ClassTeacherOf')}}
		{{Form::text('classteacher_of', '',array('id'=>'classteacher_of'))}}
	
		   </div>
		
		 <div class="form-group">

				{{Form::label('salary','Ages')}}
			{{Form::number('salary',20,array('min'=>1,'max'=>100000,'id'=>'salary'))}}
			
		   </div>	
	

	
{{Form::submit('Save')}}
		{{Form::close()}}
		  
		      </div>
			  
</div>

@endsection			  