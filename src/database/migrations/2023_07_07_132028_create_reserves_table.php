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
      $table->string('shop_ID')->references('shopID')->on('shops');
      $table->string('user_ID')->references('userID')->on('users');
      $table->date('date');
      $table->string('time');
      $table->string('people');
      $table->timestamps();

      // $table->foreign('shop_ID')->references('shopID')->on('shops');
      // $table->foreign('user_ID')->references('userID')->on('users');
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
