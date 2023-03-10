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
  Schema::create('courses', function (Blueprint $table) {
   $table->id();
   $table->string('name');
   $table->string('description');
   $table->string('image');
//    $table->unsignedBigInteger('user_id');   // others
   $table->timestamps();

//    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  // others
  });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
  Schema::dropIfExists('courses');
 }
};