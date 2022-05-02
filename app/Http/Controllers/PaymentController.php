<?php

namespace App\Http\Controllers;

use App\Models\Adicionales;
use App\Models\cliente;
use App\Models\Compra;
use App\Models\ComprasAdicionales;
use App\Models\Pago;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

 

class PaymentController extends Controller
{
    public function completePayment(Request $request){
        
        $cliente = new cliente();
        $reserva = new Reserva();
        $compra = new Compra();
        

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
        $reserva->pasajeros = $request->personas;
        $reserva->fecha_salida = $request->date1;

        $reserva->save();

        $ultima_reserva = Reserva::all('id')->last();

        $compra->id_cliente = $ultimo->id;
        $compra->id_reserva = $ultima_reserva->id;
        $compra->id_producto = $request->id;
        $compra->id_pagos = $request->metodo;
        $compra->total_compra = $request->precio_input;

        $encrypt = md5($ultima_reserva->id);

        $codigo_compra = substr($encrypt,0,6);


        $compra->recibo_compra = $codigo_compra;

        $compra->save();

        $ultima_compra = Compra::all('id')->last();

        for ($i=0; $i < $request->item; $i++) {
            $compra_adicional = new ComprasAdicionales(); 
            $compra_adicional->id_compra = $ultima_compra->id;
            $compra_adicional->id_adicional = $request->check2[$i];
            $compra_adicional->save();
        }

        


        return($codigo_compra);
    }

    public function postPayment($codigo){

        $recibo = DB::select("SELECT compras.recibo_compra, clientes.nombre, clientes.apellido, clientes.tipo_identificacion, clientes.identificacion
        , reservas.pasajeros, productos.nombre as producto, pagos.tipo_pago, precios.precio_base ,compras.total_compra, reservas.fecha_salida FROM rutatayrona.clientes,
        rutatayrona.reservas, rutatayrona.productos, rutatayrona.pagos, rutatayrona.compras, rutatayrona.precios WHERE
        clientes.id = compras.id_cliente AND reservas.id = compras.id_reserva AND productos.id = compras.id_producto
        AND pagos.id = compras.id_pagos AND compras.recibo_compra = '$codigo' AND precios.id_producto = compras.id_producto ");

        $adicional = DB::select("SELECT adicionales.nombre, adicionales.descripcion, adicionales.precio FROM rutatayrona.adicionales,
        rutatayrona.compras, rutatayrona.compras_adicionales WHERE compras_adicionales.id_compra = compras.id
         AND adicionales.id = compras_adicionales.id_adicional AND compras.recibo_compra = '$codigo'");

        $nueva_fecha = date("d/m/Y", strtotime($recibo[0]->fecha_salida));

        if (empty($recibo)) {
            return 'Usted no tiene permiso para ingresar aquí';
        }
        
        return view('compra', compact('recibo', 'adicional', 'nueva_fecha'));
        

        
        
    }
}
