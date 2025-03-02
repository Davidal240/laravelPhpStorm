<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white dark:bg-gray-800 p-8 rounded shadow-md">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">Bienvenido</h1>
        <p class="text-lg text-gray-700 dark:text-gray-300 mb-6">
            Haz clic en el botón para ver las películas de Star Wars.
        </p>
        <a href="{{ route('peliculas.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded">
            Ver Películas
        </a>
    </div>
</div>
</body>
</html>
