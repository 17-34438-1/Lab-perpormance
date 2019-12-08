<html>
<head>
<title>
Display combine data 

</title>
<h1>
Display combined data from database
</h1>

</head>
<body>
<table>
<thead>
<th>S No.</th>
<th> Student Name</th>
<th>Student Class</th>
<th>Student Age</th>
<th>Class Teacher Of</th>
<th>User Name</th>
</thead>
<tbody>
@for($i =1;$i<=DB::table('student')->count();$i++)
	<tr>
<?php $result=DB::table('student')->where('student_id','=',$i)->get()?>
<td>{{$result[0]->student_id}}</td>
<td>{{$result[0]->student_name}}</td>
<td>{{$result[0]->student_class}}</td>
<td>{{$result[0]->student_age}}</td>
<td>{{$result[0]->class_teacher}}</td>

<?php $result1 = DB::table('teachers')->where('teachers_name','=',$result[0]->class_teacher)->get();
if($result1 == null) {?>
<td> NA </td>

<?php } else { ?>
<td> {{$result1[0]->salary}}</td>
<?php } ?>

</tr>
@endfor
</tbody>
</table>
</body>
</html>