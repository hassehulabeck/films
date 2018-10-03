<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Movie::class, 100)->create()->each(function ($movie) {
        $movie->actors()->saveMany(factory(Actor::class, 5)->make());
      });
    }
}
