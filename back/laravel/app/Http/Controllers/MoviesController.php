<?php

namespace App\Http\Controllers;
use App\Models\Movies;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function mostrarPelis()
    {
        // Obtener todas las películas desde el modelo
        $peliculas = Movies::all();

        // Devolver la vista con las películas
        return response()->json($peliculas);
        
    }
}
