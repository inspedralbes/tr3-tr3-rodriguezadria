<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Movies;


class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $json = File::get(database_path('../movies.json'));
        $movies = json_decode($json, true);

        foreach ($movies as $movie) {
            Movies::create([
                'title' => $movie['titulo'],
                'description' => $movie['descripcion'],
                'director' => $movie['director'],
                'release_date' => $movie['release_date'],
                'duration' => $movie['duracion'],
            ]);
        }
    }
}
