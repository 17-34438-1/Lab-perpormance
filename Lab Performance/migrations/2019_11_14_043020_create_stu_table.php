<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('student',function($table){
		$table->increments($column='student_id', $primary = true);
		$table->string($column = 'student_name', $length=200);
		
		$table->bigInteger($column='student_class', $auto_increment=false,$unsigned=true, $length=255, $primary=false);
$table->bigInteger($column='student_age', $auto_increment=false,$unsigned=true, $length=255, $primary=false);
		$table->string($column='class_teacher', $length=200);
		
	
	   $table->timestamps();
		});	   //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::drop('student'); //
    }
}
