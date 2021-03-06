<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors_movies', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('actor_id')->unsigned();
          $table->integer('movie_id')->unsigned();

          $table->foreign('actor_id')->references('id')->on('actors')->onDelete('cascade');
          $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actors_movies', function (Blueprint $table) {
            //
        });
    }
}
