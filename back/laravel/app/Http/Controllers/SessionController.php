<?php

namespace App\Http\Controllers;
use App\Models\Sessions;
use App\Models\Compra;

class SessionController extends Controller
{
    public function mostrarSesion()
{
    $sessions = Sessions::all();
    return response()->json(['sessions' => $sessions]);
}

public function mostrarSesionPorId($sesionId)
{
    $session = Sessions::find($sesionId);
    
    if (!$session) {
        return response()->json(['error' => 'No se encontró la sesión']);
    }

    return response()->json(['session' => $session]);
}


}
