<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4 text-center">Registrar nuevo Evento</h2>

        @if ($errors->any())
            <div class="bg-red-200 text-red-700 p-3 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('guardar') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block font-semibold">Nombre</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div>
                <label class="block font-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div>
                <label class="block font-semibold">Contraseña</label>
                <input type="password" name="password" value="{{ old('password') }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
            </div>
        </form>
    </div>
</body>

</html>
