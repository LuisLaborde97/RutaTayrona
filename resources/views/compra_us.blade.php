@extends('index')

@section('title', 'thank you for your purchase!')

@section('content')
    <br>
    <div class="card mt-5">        
        <div class="card-body">
            <h3 class="card-title text-muted text-center">Receipt of payment</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Billing code:</td>
                        <td>#{{$recibo[0]->recibo_compra}}</td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td>{{$recibo[0]->nombre}}</td>
                        
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td>{{$recibo[0]->apellido}}</td>
                    </tr>
                    <tr>
                        <td>Tour purchased: </td>
                        <td>{{$recibo[0]->producto}}</td>
                    </tr>
                    <tr>
                        <td>Number of passengers: </td>
                        <td>{{$recibo[0]->pasajeros}}</td>
                    </tr>
                    <tr>
                        <td>Type of payment: </td>
                        <td>{{$recibo[0]->tipo_pago}}</td>
                    </tr>

                    <tr>
                        <td>Tour Price: </td>
                        <td>{{number_format(($recibo[0]->precio_base*0.000264953)*0.3,2)}}</td>
                    </tr>
                    @foreach ($adicional as $item)
                    <tr>
                        <td>Additional: </td>
                        <td>{{$item->nombre}} ({{number_format($item->precio*0.000264953,2)}})</td>
                    </tr>    
                    @endforeach
                    <tr>
                        <td>Departure date: </td>
                        <td>{{$nueva_fecha}}</td>
                    </tr>  
                    <tr>
                        <td>Total paid (30%)</td>
                        <td>{{$recibo[0]->total_compra}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection