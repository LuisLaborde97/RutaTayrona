<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ClienteController extends Controller
{
    public function store(Request $request){

        $cliente = new cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->correo = $request->correo;
        $cliente->indicativo = $request->indicativo;
        $cliente->telefono = $request->telefono;
        $cliente->pais = $request->pais;
        $cliente->edad = $request->edad;


        return $cliente;

       
    }
}

