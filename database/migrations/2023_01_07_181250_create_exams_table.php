<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('exams', function (Blueprint $table) {
   $table->id();
   $table->string('name');
   $table->unsignedBigInteger('course_id');
//    $table->unsignedBigInteger('grade_id');   // Rasel Vai
   $table->text('description');
   $table->timestamps();

   $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
//    $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade'); // Rasel Vai

  });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
  Schema::dropIfExists('exams');
 }
};