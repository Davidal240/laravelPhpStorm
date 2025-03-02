<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Películas de Star Wars</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Películas de Star Wars</h1>
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('peliculas.detalles') }}" method="GET">
                <div class="mb-4">
                    <label for="film" class="block text-lg font-medium text-gray-700 dark:text-white">Selecciona una película:</label>
                    <select name="film_url" id="film" class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md">
                        <option value="">-- Elige una película --</option>
                        @foreach ($films as $film)
                            <option value="{{ $film['url'] }}">{{ $film['title'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
                    Ver detalles
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
