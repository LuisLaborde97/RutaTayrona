<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function completePayment(Request $request){
        $cliente = new cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->edad = $request->edad;
        $cliente->correo = $request->correo;
        $cliente->sexo = $request->sexo;
        $cliente->indicativo = $request->indicativo;
        $cliente->telefono = $request->telefono;
        $cliente->pais = $request->pais;
        $cliente->tipo_identificacion = $request->identificacion;
        $cliente->identificacion = $request->num_identificacion;

        $cliente->save();


        return response($cliente);
    }
}
