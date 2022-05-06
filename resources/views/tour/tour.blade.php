@extends('index')

@section('title', 'Tours')

@section('content')

<br>
<div class="container mt-5">
  <div class="row">
      <div class="col-lg-7" style="margin-top: 4%;">
          <!-- Post content-->
          <article>
              <!-- Post header-->

              <header class="mb-4">
                  <!-- Post title-->
                  <h1 class="fw-bolder mb-2">{{$tour[0]->nombre_producto}}</h1><sup><h4>(Reserva ya mismo por el 30%)</h4></sup>
                  <!-- Post meta content-->
                  <!-- Post categories-->
              </header>
              <!-- Preview image figure-->
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset($tour[0]->url)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset($tour[1]->url)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset($tour[2]->url)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset($tour[3]->url)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset($tour[4]->url)}}" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              
              <!-- Post content-->
              <div class="mt-3">

                  <p class="fs-5 mb-4">{{$tour[0]->descripcion}}</p>
                  
              </div>
          </article>
          <div class="container mb-3">
            <div class="row row-50 justify-content-center align-items-xl-center">
              
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Itinerario</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Incluye</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Recomendacion y Consejos</a></li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-4-1">
                      <div class="card">
                        <div class="card-body">
                      @for ($i = 0; $i < count($titulo); $i++)
                          <div class="mb-3">
                            <h5 class="card-title">{{$titulo[$i]->titulo}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">{{$titulo[$i]->dia}}</h6>
                          </div>
                          
                          @for ($j = 0; $j < count($checks); $j++)
                              @if ($titulo[$i]->id == $checks[$j]->id_itinerario)
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-success"><i class="fa fa-map-marker"></i> {{$checks[$j]->checks}}</li>
                                  </ul>
                              @endif
                          @endfor
                      @endfor
                    </div>
                    </div>
                      
                    </div>
                    <div class="tab-pane fade" id="tabs-4-2">

                      <div class="card">
                        <div class="card-body">

                      @foreach ($incluye as $i)
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-success"><i class="fa fa-check-circle-o"></i> {{$i->incluye}}</li>
                      </ul>
                      @endforeach
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-4-3">
                      <div class="row">
                       <div class="col-lg-6">
                         <div class="card">
                           <div class="card-body">
                             <h4 class="card-title">Recomendacion</h4>
                              @foreach ($recomendacion as $item)
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item list-group-item-success"><i class="fa fa-bullhorn"></i> {{$item->recomendacion}}</li>
                                </ul>
                              @endforeach
                           </div>
                         </div>
                       </div>

                       <div class="col-lg-6">
                         <div class="card">
                           <div class="card-body">
                            <h4 class="card-title">Consejo</h4>
                             @foreach ($consejos as $item)
                             <ul class="list-group list-group-flush">
                              <li class="list-group-item list-group-item-success"><i class="fa fa-bullhorn"></i> {{$item->consejo}}</li>
                            </ul>
                             @endforeach
                             <div class="card-footer">
                               <h4>DISFRUTE ESTA EXPERIENCIA AL MAXIMO</h4>
                             </div>
                           </div>

                         </div>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
          </div>
      </div>
<div class="col-lg-5" style="margin-top: 18%;">

<div class="card">
  <div class="card-header"><h5 class="card-title">Completa la compra</h5></div>
  
  <div class="card-body">
    <form id="clientes2">
      <div class="row">

        
          <div class="col-lg-10">
            <div class="mb-3">
              <select class="form-select" name="metodo" id="metodo">
                <option value="0"selected>Metodo de Pago</option>
                <option value="1">PayPal</option>
                <option value="2">Bancolombia</option>
                <option value="3">MercadoPago</option>
                <option value="4">BitCoin</option>
              </select>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="mt-1">
              <i class="fa fa-credit-card" style="font-size:30px"></i>
            </div>
          </div>

          <div class="col-lg-10">
            <div class="mb-3">
              <input type="text" class="form-control" name="personas" id="personas" placeholder="Acompañantes">
            </div>
          </div>

          <div class="col-lg-2">
            <div class="mt-1">
              <i class="fa fa-user-plus" style="font-size:30px"></i>
            </div>
          </div>
      
      </div>
    </form>
        <div class="mb-3">
          <div class="badge bg-danger text-wrap" id="respuesta"></div>  
        </div>
        
      

        <button type="button" id="reserva" class="btn btn-outline-success" data-bs-toggle="modal" >Continuar</button>
      

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">El pago del 70% restante se debe completar en las oficinas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card">
                 <div class="card-header"><h5 class="card-title">Completa la compra</h5></div>
                   <div class="card-body">

                      <form id="clientes" name="clientes">
                        @csrf
                        <input type="hidden" name="id" value="{{$tour[0]->id}}">
                        <div class="row">

                        <div class="col-lg-4">
                          <div class="mb-3">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="mb-3">
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="mb-3">
                            <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
                          </div>
                        </div>

                        <div class="col-lg-8">
                          <div class="mb-3">
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="mb-3">
                            <select name="sexo" id="sexo" class="form-select">
                              <option selected>Sexo</option>
                              <option value="M">Masculino</option>
                              <option value="F">Femenino</option>
                              <option value="O">Otros</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="mb-3">
                            <input class="form-control" type="text" name="indicativo" id="indicativo" placeholder="+57">
                          </div>
                        </div>

                        <div class="col-lg-5">
                          <div class="mb-3">
                            <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Telefono">
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="mb-3">
                            <select class="form-select" name="pais" id="pais">
                              <option selected>Pais</option>
                              @foreach ($pais as $item)
                                  <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <select class="form-select" name="identificacion" id="identificacion">
                              <option selected>Tipo de Identificación</option>
                              <option value="cedula">Cédula</option>
                              <option value="pasaporte">Pasaporte</option>
                              <option value="Cedula Extranjera">Cédula de extranjería </option>
                            </select>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <input class="form-control" type="text" name="num_identificacion" id="num_identificacion" placeholder="Identificación">
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="mb-3">
                            <textarea class="form-control" name="salida" id="salida" placeholder="Lugar de salida"></textarea>
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="mb-3">
                            <textarea class="form-control" name="recomendacion" id="recomendacion" placeholder="Recomendaciones"></textarea>
                          </div>
                        </div>



                        <div class="card-footer">
                          <div class="mb-3">
                            @foreach ($adicionales as $item)
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="{{number_format($item->precio*0.000264953,2)}}" id="checkAdicional" name="check" ">
                              <input class="form-check-input" type="checkbox" value="{{$item->id}}" id="checkAdicional2" name="check2[]" style="opacity:0; position:absolute; left:9999px;">
                              
                              <label class="form-check-label pull-left" for="flexCheckDefault">
                                {{$item->nombre}} ({{number_format($item->precio*0.000264953, 2)}})
                              </label>
                            </div>
                            @endforeach
                            <input type="hidden" name="item" id ="item" value="">
                          </div>
                          
                          <div class="row">
                            
                            <div class="col-md-7">
                              <div class="mb-3">
                                <input class="form-control" id="date1" name="date1" type="date">
                              </div>
                            </div>
                            

                            <div class="col-md-2">
                              <div class="mb-3">
                                <input type="text" class="form-control text-center" name="personas2" id="personas2" value="" disabled>
                              </div>
                            </div>

                            <div class="col-md-1">
                              <div class="mt-2">
                                <i class="fa fa-user-plus" style="font-size:20px"></i>
                              </div>
                            </div>

                          </div>

                          <div class="col-lg-12">
                            <div class="mb-3">
                             <h4>Precio: <span id="precio">{{number_format(($tour[0]->precio_base * 0.000264953)*0.3, 2)}}</span> </h4>
                            </div>
                          </div>

                          <input type="hidden" id="precio_input" name="precio_input" value="">

                          <div class="mb-3">
                            <div class="badge bg-danger text-wrap" id="respuesta2"></div>  
                          </div>

                          
                          <button type="button" id="finalizar" class="btn btn-outline-success">Comprar</button>
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                          
                          </div>
                        </div>                   
                        </form>
                      </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-50" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center text-muted" id="total"> Total a pagar: {{number_format(($tour[0]->precio_base * 0.000264953)*0.3, 2)}}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                            <div id="metodopago"></div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Atrás</button>
                    </div>
                  </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
        


<script>
  $(document).ready(function (e) {  
    
    var checks = document.querySelectorAll('#checkAdicional');
    var checks2 = document.querySelectorAll('#checkAdicional2');
    var precio = $('#precio').text();
    var precio_total = 0;

    
    
    var item = $('#item').val();
    $('#precio_input').val(precio);
    
    var item = 0;

    $('#reserva').click(function(event) {
      event.preventDefault();


      var metodo = $('#metodo').val();
      var cantPersonas = $('#personas').val();
         

      if (metodo == "0") {
        $('#respuesta').html("You must enter the payment method");
        return false;
        $('#metodo').focus();
      }

      if (cantPersonas == "") {
        $('#personas2').val('0');
        precio_total = precio;
        console.log(precio_total);
      }else{
        $('#personas2').val(cantPersonas);
        precio_total = precio*cantPersonas
        $('#precio_input').val(precio_total);
        $('#precio').html(precio_total);
        console.log(precio_total);
      }

      var cantPersonas2 = $('#presonas2').val();

      $("#staticBackdrop").modal('show');

      


      if (metodo == '1') {
       $('#metodopago').html('<div id="paypal-button-container"></div>');

       paypal.Buttons({
      style:{
        color: 'blue',
        shape: 'pill',
        label: 'pay'
      },
      createOrder: function(data, actions){
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: precio_total
            }
          }]
        });
      },
      onApprove: function(data, actions){
        actions.order.capture().then(function(detalles){

          var headers = {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }

          var form1 = $('#clientes, #clientes2').serialize();

          $.ajax({
            type: "POST",
            url: "{{route('payment.completePayment')}}",
            data: form1, 
            dataType: "json",
            headers: headers,
          })
          .done(function(response){
            $(location).attr('href',"http://127.0.0.1:8000/compraFinalizada/"+response.recibo_compra);
          })
          .fail(function(jqXHR, textStatus, errorThrow){

            console.error(textStatus, errorThrow);

          });
      });
      },
      onCancel: function(data){
        console.log(data);
      }
    }).render('#paypal-button-container');
  }else{
    $('#metodopago').html('<h1>This payment method is not complete</h1>')
  }
    });


    $('#finalizar').click(function(e){
      
      e.preventDefault();
      
      var nombre = $('#nombre').val();
      var apellido = $('#apellido').val();
      var edad = $('#edad').val();
      var correo = $('#correo').val();
      var sexo = $('#sexo').val();
      var indicativo = $('#indicativo').val();
      var telefono = $('#telefono').val();
      var pais = $('#pais').val();
      var identificacion = $('#identificacion').val();
      var num_identificacion = $('#num_identificacion').val();
      var salida = $('#salida').val();
      var recomendacion = $('#recomendacion').val();
      var fecha = $('#date1').val();

      if (nombre == "") {
        $('#respuesta2').html("Please enter your First Name.");
        $('#nombre').focus();
        return false;
      }

      if (apellido == "") {
        $('#respuesta2').html("Please enter your Last Name.");
        $('#apellido').focus();
        return false;
      }

      if (edad == "") {
        $('#respuesta2').html("Please enter your age.");
        $('#edad').focus();
        return false;
      }

      if (correo == "") {
        $('#respuesta2').html("Please enter your email.");
        $('#correo').focus();
        return false;
      }

      if (sexo == "") {
        $('#respuesta2').html("Please enter your gender.");
        $('#sexo').focus();
        return false;
      }

      if (indicativo == "") {
        $('#respuesta2').html("Please enter your callsign.");
        $('#indicativo').focus();
        return false;
      }

      if( telefono == "") {
        $('#respuesta2').html("Please enter your phone number.");
        $('#telefono').focus();
        return false;
      }

      if (pais == "") {
        $('#respuesta2').html("Please enter your country.");
        $('#pais').focus();
        return false;
      }

      if (identificacion == "") {
        $('#respuesta2').html("Please enter your ID type.");
        $('#identificacion').focus();
        return false;
      }

      if (num_identificacion == "") {
        $('#respuesta2').html("You must enter your ID number please..");
        $('#num_identificacion').focus();
        return false;
      }

      if (salida == "") {
        $('#respuesta2').html("Debe ingresar el lugar de salida por favor.");
        $('#salida').focus();
        return false;
      }

      if (fecha == "") {
        $('#respuesta2').html("You must enter the place of departure please.");
        $('#date1').focus();
        return false;
      }

      $("#staticBackdrop2").modal('show');
      $('#staticBackdrop').modal('hide');

    });

    
    
  
    for(let i = 0; i < checks.length; i++){

      checks[i].addEventListener('click', function(){

        if(checks[i].checked){

          var suma = parseFloat(checks[i].value) + parseFloat(precio_total);

          precio_total = suma.toFixed(2);

          $('#precio').html(precio_total);

          $('#precio_input').val(precio_total);

          $('#total').html('Total a pagar: '+precio_total);

          item += 1;

          checks2[i].click();

          
          

        }else{

          var suma = parseFloat(precio_total) - parseFloat(checks[i].value);
          
          precio_total = suma.toFixed(2);

          $('#precio').html(precio_total);

          $('#precio_input').val(precio_total);

          $('#total').html('Total a pagar: '+precio_total+' USD');

          item -= 1;

          checks2[i].click();

          


        }



        $('#item').val(item);
        

      })
        
    }
    

  });
</script>
  

@endsection



