<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->string('about');
            $table->string('area_ID')->references('areasID')->on('areas');
            $table->string('genre_ID')->references('genresID')->on('genres');
            $table->timestamps();

            // $table->foreign('area_ID')->references('areasID')->on('areas');
            // $table->foreign('genre_ID')->references('genresID')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
