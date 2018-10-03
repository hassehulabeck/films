<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // Populate movies
      factory(App\Movie::class, 100)->create();

      // Populate actors
      factory(App\Actor::class, 300)->create();

      // Get all the roles attaching up to 3 random roles to each user
      $movies = App\Movie::all();

      // Populate the pivot table
      //Get array of ids
      $actorIds      = DB::table('actors')->count('id');
      $movieIds      = DB::table('movies')->count('id');

      //Seed pivot table with 20 entries
      foreach ((range(1, 200)) as $index)
      {
        DB::table('actors_movies')->insert(
          [
            'actor_id' => mt_rand(1, $actorIds),
            'movie_id' => mt_rand(1, $movieIds)
          ]
        );
       }
    }
}
