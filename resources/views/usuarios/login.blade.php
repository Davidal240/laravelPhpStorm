<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">

    <h2 class="text-2xl font-bold mb-4 text-center">Iniciar Sesión</h2>


    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Login</button>
    </form>
</div>


</body>

</html>
