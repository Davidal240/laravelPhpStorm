<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4 text-center">Lista de usuarios</h2>

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">Nombre</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
            <th class="border border-gray-300 px-4 py-2">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $v)

            <tr class="bg-white hover:bg-gray-100">
                <td class="border border-gray-300 px-4 py-2">{{ $v->name }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $v->email }}</td>
                <td>
                    <!-- Botón Editar -->
                    <a href="{{ route('usuarios.edit', $v->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Editar</a>

                    <!-- Formulario para Eliminar -->
                    <form action="{{ route('destroy', $v->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este vuelo?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Eliminar</button>
                    </form>
                </td>

            </tr>

        @endforeach
        </tbody>
    </table>


    <!-- Paginación -->
    <div class="mt-4 flex justify-center">
        {{ $usuarios->links() }}
    </div>
</div>

</body>

</html>
