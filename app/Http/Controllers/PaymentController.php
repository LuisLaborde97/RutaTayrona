<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Pago;
use App\Models\Reserva;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function completePayment(Request $request){
        $cliente = new cliente();
        $reserva = new Reserva();
        $pago = new Pago();

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

        $ultimo = cliente::all('id')->last();

        $reserva->id_cliente = $ultimo->id;
        $reserva->id_producto = $request->id;
        $reserva->recomendacion = $request->recomendacion;
        $reserva->pasajeros = $request->personas2;

        $reserva->save();

        return response($reserva);
    }

    public function postPayment(){
        return view('compra');
    }
}
