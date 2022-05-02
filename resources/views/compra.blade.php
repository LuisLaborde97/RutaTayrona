@extends('index')

@section('title', 'Gracias por su compra!')

@section('content')
    <br>
    <div class="card mt-5">        
        <div class="card-body">
            <h3 class="card-title text-muted text-center">Recibo de pago</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Codigo de factura:</td>
                        <td>#{{$recibo[0]->recibo_compra}}</td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>{{$recibo[0]->nombre}}</td>
                        
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td>{{$recibo[0]->apellido}}</td>
                    </tr>
                    <tr>
                        <td>Tour adquirido: </td>
                        <td>{{$recibo[0]->producto}}</td>
                    </tr>
                    <tr>
                        <td>Cantidad de pasajeros: </td>
                        <td>{{$recibo[0]->pasajeros}}</td>
                    </tr>
                    <tr>
                        <td>Tipo de pago: </td>
                        <td>{{$recibo[0]->tipo_pago}}</td>
                    </tr>

                    <tr>
                        <td>Precio del Tour: </td>
                        <td>{{number_format(($recibo[0]->precio_base*0.000264953)*0.3,2)}}</td>
                    </tr>
                    @foreach ($adicional as $item)
                    <tr>
                        <td>Adicionales: </td>
                        <td>{{$item->nombre}} ({{number_format($item->precio*0.000264953,2)}})</td>
                    </tr>    
                    @endforeach
                    <tr>
                        <td>Fecha de salida: </td>
                        <td>{{$nueva_fecha}}</td>
                    </tr>


                     
                    
                    <tr>
                        <td>Total pagado (30%)</td>
                        <td>{{$recibo[0]->total_compra}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection