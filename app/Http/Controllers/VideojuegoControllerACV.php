<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideojuegoControllerACV extends Controller
{
    private $videojuegos = [
    [
        'id' => 1,
        'nombre' => 'The Witcher 3: Wild Hunt',
        'plataforma' => 'PC',
        'precio' => 29.99
    ],
    [
        'id' => 2,
        'nombre' => 'God of War Ragnarök',
        'plataforma' => 'PlayStation',
        'precio' => 59.99
    ],
    [
        'id' => 3,
        'nombre' => 'Halo Infinite',
        'plataforma' => 'Xbox',
        'precio' => 39.99
    ],
    [
        'id' => 4,
        'nombre' => 'The Legend of Zelda: Tears of the Kingdom',
        'plataforma' => 'Nintendo Switch',
        'precio' => 59.99
    ],
    [
        'id' => 5,
        'nombre' => 'Cyberpunk 2077',
        'plataforma' => 'PC',
        'precio' => 34.99
    ],
    [
        'id' => 6,
        'nombre' => 'Spider-Man 2',
        'plataforma' => 'PlayStation',
        'precio' => 69.99
    ],
    [
        'id' => 7,
        'nombre' => 'Forza Horizon 5',
        'plataforma' => 'Xbox',
        'precio' => 49.99
    ],
    [
        'id' => 8,
        'nombre' => 'Mario Kart 8 Deluxe',
        'plataforma' => 'Nintendo Switch',
        'precio' => 44.99
    ],
    [
        'id' => 9,
        'nombre' => 'Minecraft',
        'plataforma' => 'PC',
        'precio' => 19.99
    ],
    [
        'id' => 10,
        'nombre' => 'The Last of Us Part II',
        'plataforma' => 'PlayStation',
        'precio' => 39.99
    ]
];
    // Devuelve el array completo
    public function todos()
    {
        return $this->videojuegos;
    }

    // Listado de todos los videojuegos
    public function index()
    {
        return response()->json($this->videojuegos);
    }

    // Un videojuego concreto a partir de su id
    public function show($id)
    {
        foreach ($this->videojuegos as $videojuego) {
            if ($videojuego['id'] == $id) {
                return response()->json($videojuego);
            }
        }

        abort(404, 'Videojuego no encontrado');
    }

    // Videojuegos de una plataforma
    public function plataformas(Request $request)
    {
        $plataforma = $request->input('plataforma');

        $resultado = [];
        foreach ($this->videojuegos as $videojuego) {
            if (strtolower($videojuego['plataforma']) == strtolower($plataforma)) {
                $resultado[] = $videojuego;
            }
        }

        return response()->json($resultado);
    }
}

