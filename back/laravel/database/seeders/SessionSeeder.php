<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sessions; // Asegúrate de importar el modelo correcto
use App\Models\Movies; // Asegúrate de importar el modelo correcto
use Illuminate\Support\Facades\File;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path('../sessions.json')); // Corrige la ruta del archivo
        $sessions = json_decode($json, true);

        foreach ($sessions as $session) {
            $movie = Movies::find($session['peli_id']); // Busca la película por su ID
            if ($movie) {
                Sessions::create([
                    'peli_id' => $session['peli_id'],
                    'hora' => $session['hora'],
                    'fecha' => $session['fecha'],
                ]);
            }
        }
    }
}
