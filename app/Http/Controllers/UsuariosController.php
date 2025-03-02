<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

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


}
