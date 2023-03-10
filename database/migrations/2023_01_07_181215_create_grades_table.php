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
  Schema::create('grades', function (Blueprint $table) {
   $table->id();
   $table->unsignedBigInteger('number');
//    $table->string('name');  // others
   $table->unsignedBigInteger('course_id');
   $table->timestamps();

   $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
  });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
  Schema::dropIfExists('grades');
 }
};