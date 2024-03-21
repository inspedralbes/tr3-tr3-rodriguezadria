<?php

namespace App\Http\Controllers;
use App\Models\Sessions;
use App\Models\Compra;

class SessionController extends Controller
{
    public function mostrarSesion()
    {
        $sesiones = Sessions::with('movie')->get()->map(function ($sesion) {
            return [
                'sesion_id' => $sesion->id,
                'hora' => $sesion->hora,
                'fecha' => $sesion->fecha,
                'movie' => [
                    'titulo' => $sesion->movie->titulo ?? 'No Disponible',
                    'descripcion' => $sesion->movie->descripcion ?? 'No Disponible',
                    'enlace_imagen' => $sesion->movie->enlace_imagen ?? 'No Disponible',
                ],
            ];
        });

        return response()->json(['sesiones' => $sesiones]);
    }

    public function getButacasCompradas($sessionId)
    {
        $compras = Compra::where('sessions_id', $sessionId)->get();
        $butacasId = $compras->pluck('id_butaca');

        return response()->json($butacasId);
    }

}
