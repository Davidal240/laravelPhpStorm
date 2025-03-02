<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Nette\Schema\ValidationException;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = User::paginate(5);

        return view('usuarios.index', compact('usuarios'));
    }
    public function registrar()
    {
        return view('usuarios.registrar');
    }

    public function guardar(UserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('usuarios.index');
    }

    public function editar(User $user)
    {
        return view('usuarios.edit', compact('user'));
    }

    public function actualizar(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('usuarios.index');

    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('usuarios.index')->with('success', 'Evento eliminado correctamente.');
    }

    public function formLogin()
    {
        return view('usuarios.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales son incorrectas.'],
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        // Almacenar el token en una cookie
        return redirect()->route('usuarios.index')
            ->withCookie(cookie('token', $token, 60*24, '/', null, false, true)); // 1 día
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Sesión cerrada correctamente']);
    }


}
