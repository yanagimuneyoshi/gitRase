<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
  public function up()
  {
    Schema::create('shops', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('photo');
      $table->string('about');
      $table->unsignedBigInteger('area_id');
      $table->unsignedBigInteger('genre_id');
      $table->timestamps();

      // $table->foreign('area_id')->references('id')->on('areas');
      // $table->foreign('genre_id')->references('id')->on('genres');
    });
  }

  public function down()
  {
    Schema::dropIfExists('shops');
  }
}
