<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use App\Models\Sessions;

class SessionController extends Controller
{
    public function mostrarSession()
    {
        $sessions = Sessions::all();

        // Cargar información de la película asociada a cada sesión
        foreach ($sessions as $session) {
            $session->movie = Movies::find($session->peli_id);
        }

        return response()->json($sessions);
    }
}
