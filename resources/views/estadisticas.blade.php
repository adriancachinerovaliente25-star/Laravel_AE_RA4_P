<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadísticas del catálogo</title>
</head>
<body>
    <h1>Estadísticas del catálogo de videojuegos</h1>
    <ul>
        <li>Número total de videojuegos: {{ $total }}</li>
        <li>Número de plataformas diferentes: {{ $plataformas }}</li>
        <li>Precio medio: {{ number_format($precioMedio, 2) }} €</li>
    </ul>
</body>
</html>
