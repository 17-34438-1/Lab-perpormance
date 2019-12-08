<?php
use App\Teacher;
use App\Student;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('/insertinitialvaluesteachers', function(){
	
	
	
	$teacher = new Teacher();
	$teacher->teachers_id=4;
	$teacher->teachers_name='Islam';
	$teacher->classteacher_of='12';
	$teacher->salary ='3000';
	$teacher->save();
	
	
	$teacher = new Teacher();
	$teacher->teachers_id=5;
	$teacher->teachers_name='islamic';
	$teacher->classteacher_of='13';
	$teacher->salary ='4000';
	$teacher->save();
	
	
	
});

Route::get('/insertinitialvaluesstudents',function(){


$student = new Student();

$student->student_id =1;
$student->student_name='islam';

$student->student_class ='12';
$student->student_age =20;
$student->class_teacher ='rabada';	
$student->save();




});


Route::get('/displayteachers',function(){
	
	return view('displayteacherpage');
	
});
Route::get('/displaystudents',function(){
	
	return view('displaystudentpage');
	
});

Route::get('/insertteachers',function(){
return view('InsertTeacherpage');	
});

Route::post('InsertedDataTeachers','TeachersController@InsertAllDataTeachers');

Route::get('/insertstudents',function(){
	
	return view('InsertStudentpage');
});
Route::post('InsertedDataStudents','StudentController@InsertAllDataStudents');
Route::get('/displaycombineddata',function(){
	return view('displaycombineddata');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);

Route::get('/account', [
    'uses' => 'UserController@getAccount',
    'as' => 'account'
]);

Route::post('/upateaccount', [
    'uses' => 'UserController@postSaveAccount',
    'as' => 'account.save'
]);

Route::get('/userimage/{filename}', [
    'uses' => 'UserController@getUserImage',
    'as' => 'account.image'
]);

Route::get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::post('/createpost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth'
]);

Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth'
]);

Route::post('/edit', [
    'uses' => 'PostController@postEditPost',
    'as' => 'edit'
]);

Route::post('/like', [
    'uses' => 'PostController@postLikePost',
    'as' => 'like'
]);

