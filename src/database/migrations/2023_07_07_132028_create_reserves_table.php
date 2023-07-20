<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('reserves', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('shop_ID');
      $table->foreign('shop_ID')->references('shopID')->on('shops');
      $table->unsignedBigInteger('user_ID');
      $table->foreign('user_ID')->references('userID')->on('users');
      $table->date('date');
      $table->string('time');
      $table->string('people');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('reserves');
  }
}
