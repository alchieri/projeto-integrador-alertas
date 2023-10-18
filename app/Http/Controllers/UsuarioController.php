<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['index','show','store','update','edit','create']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->nome = $request->input('nome');
        $usuario->idade = $request->input('idade');
        $usuario->email = $request->input('email');
        $usuario->celular = $request->input('celular');
        $usuario->password = $request->input('password');

        $usuario->save();

        $usuarios = Usuario::all();
        return view('usuarios.index')->with('usuarios', $usuarios)
            ->with('msg', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            return view('usuarios.show')->with('usuario', $usuario);
        } else {
            return view('usuarios.show')->with('msg', 'Usuário não encontrado!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            return view('usuarios.edit')->with('usuario', $usuario);
        } else {
            $usuarios = Usuario::all();
            return view('usuarios.index')->with('usuarios', $usuarios)
                ->with('msg', 'Usuário não encontrado!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        
        $usuario->nome = $request->input('nome');
        $usuario->idade = $request->input('idade');
        $usuario->email = $request->input('email');
        $usuario->celular = $request->input('celular');
        $usuario->password = $request->input('password');

        $usuario->save();

        $usuarios = Usuario::all();
        return view('usuarios.index')->with('usuarios', $usuarios)
            ->with('msg', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        $usuario->delete();

        $usuarios = Usuario::all();
        return view('usuarios.index')->with('usuarios', $usuarios)
            ->with('msg', 'Usuário excluído com sucesso!');
    }
}
