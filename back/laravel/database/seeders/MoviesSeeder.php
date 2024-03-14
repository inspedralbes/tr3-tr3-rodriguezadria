<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movies;
use Illuminate\Support\Facades\File;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path('../movies.json'));
        $movies = json_decode($json, true);

        foreach ($movies as $movie) {
            Movies::create([
                'titulo' => $movie['titulo'],
                'descripcion' => $movie['descripcion'],
                'director' => $movie['director'],
                'release_date' => $movie['release_date'],
                'duracion' => $movie['duracion'],
                'enlace_imagen' => $movie['enlace_imagen'],
            ]);
        }
    }
}
