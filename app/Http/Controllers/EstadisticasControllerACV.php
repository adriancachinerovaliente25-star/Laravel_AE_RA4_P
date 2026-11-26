<?php

namespace App\Http\Controllers;

class EstadisticasControllerACV extends Controller
{
    public function __invoke()
    {
        $videojuegos = (new VideojuegoControllerACV())->todos();

        $total = count($videojuegos);

        $plataformas = count(array_unique(array_column($videojuegos, 'plataforma')));
        
        $precioMedio = array_sum(array_column($videojuegos, 'precio')) / $total;

        return view('estadisticas', [
            'total' => $total,
            'plataformas' => $plataformas,
            'precioMedio' => $precioMedio,
        ]);
    }
}
