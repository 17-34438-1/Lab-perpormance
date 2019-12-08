<html>
  <head>
    <title>
Display Teachers
     </title>
	 <h1>Display All User from Database</h1>
  </head>
  <body>
  <table>
  <thead>
     <th> S No.</th>
	 <th>TeacherName</th>
	 <th>ClassTeacherOf</th>
	 <th>Salary </th>
	 </thead>
       <tbody>
             @for($i=1; $i <=DB::table('teachers')->count(); $i++)
	    <tr>
             <?php $result = DB::table('teachers')->where('teachers_id','=',$i)->get()  ?>
	     <td> {{$result[0]->teachers_id}}</td>
		 
		 <td>{{$result[0]->teachers_name}}</td>
		 <td>{{$result[0]->classteacher_of}}</td>
		 <td> {{$result[0]->salary }}</td>
		 
		 

        </tr> 
	          @endfor


       </tbody>
    
   </table>
  </body>
  
 </html>