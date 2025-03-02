<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $filmData['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">{{ $filmData['title'] }}</h1>
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <p class="text-gray-700 dark:text-gray-300">{{ $filmData['opening_crawl'] }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Personajes</h2>
            @foreach ($characters as $character)
                <div class="mt-4 bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $character['name'] }}</h3>
                    @if (!empty($character['vehiculos']) && count($character['vehiculos']) > 0)
                        <div class="mt-2">
                            <strong class="text-gray-800 dark:text-white">Vehículos:</strong>
                            <ul class="list-disc ml-5">
                                @foreach ($character['vehiculos'] as $vehiculo)
                                    <li>
                                        <a href="{{ route('peliculas.detallesVehiculos', ['url' => urlencode($vehiculo['url'])]) }}" class="text-blue-500 hover:underline">
                                            {{ $vehiculo['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <p class="text-gray-600 dark:text-gray-400 mt-2"><em>No posee vehículos</em></p>
                    @endif
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            <a href="{{ route('peliculas.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-semibold px-4 py-2 rounded">
                Volver a Películas
            </a>
        </div>
    </div>
</div>
</body>
</html>
