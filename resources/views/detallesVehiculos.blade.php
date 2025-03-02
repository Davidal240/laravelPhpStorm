<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Detalles del Vehículo</h1>
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <p class="text-gray-700 dark:text-gray-300"><strong>Nombre:</strong> {{ $vehiculo['name'] }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Modelo:</strong> {{ $vehiculo['model'] }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Fabricante:</strong> {{ $vehiculo['manufacturer'] }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Coste en créditos:</strong> {{ $vehiculo['cost_in_credits'] }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Longitud:</strong> {{ $vehiculo['length'] }}</p>
            <p class="text-gray-700 dark:text-gray-300"><strong>Pasajeros:</strong> {{ $vehiculo['passengers'] }}</p>
        </div>
        <div class="mt-8">
            <a href="{{ route('peliculas.detalles') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-semibold px-4 py-2 rounded">
                Volver a Detalles
            </a>
        </div>
    </div>
</div>
</body>
</html>
