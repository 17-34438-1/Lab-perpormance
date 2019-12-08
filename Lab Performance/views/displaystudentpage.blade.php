<html>
  <head>
    <title>
Display Students
     </title>
	 <h1>Display StudentInformation from Database</h1>
  </head>
  <body>
  <table>
  <thead>
     <th> S No.</th>
	 <th>Student Name</th>
	 <th>Student Class</th>
	 <th>Student Age </th>
	  <th>Class Teacher</th>
	 
	 </thead>
       <tbody>
             @for($i=1; $i <=DB::table('student')->count(); $i++)
	    <tr>
             <?php $result = DB::table('student')->where('student_id','=',$i)->get()  ?>
	     <td> {{$result[0]->student_id}}</td>
		 
		 <td>{{$result[0]->student_name}}</td>
		 <td>{{$result[0]->student_class}}</td>
		 <td> {{$result[0]->student_age }}</td>
		 	 <td> {{$result[0]->class_teacher }}</td>
		 
		 

        </tr> 
	          @endfor


       </tbody>
    
   </table>
  </body>
  
 </html>