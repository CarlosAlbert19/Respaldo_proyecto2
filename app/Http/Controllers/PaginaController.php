<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function pagina_hospital()
    {
        return view('welcome');
    }

    public function registros()
    {
        return view('registro');
    }

    public function recibeFormRegistro(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'nombre' => 'required|min:3|max:100',
            'correo' => ['required', 'email'],
            'genero' => 'required',
            'sangre' => 'required',
            'comentario' => 'required|max:255',
            'ingreso' => 'required'
        ]);
    }
}
