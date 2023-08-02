<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies=config('movies');
        foreach($movies as $movie){
            $newMovie = new Movie();
            $newMovie->name = $movie['name'];
            $newMovie->img = $movie['img'];
            $newMovie->genre = $movie['genre'];
            $newMovie->vote = $movie['vote'];
            $newMovie->original_language = $movie['original_language'];
            $newMovie->length = $movie['length'];
        
            $newMovie->save();
        }
    }
}
