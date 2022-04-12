@extends('index')

@section('title', 'Tours')

@section('content')

<br>
<div class="container mt-5">
  <div class="row">
      <div class="col-lg-7">
          <!-- Post content-->
          <article>
              <!-- Post header-->

              <header class="mb-4">
                  <!-- Post title-->
                  <h1 class="fw-bolder mb-2">{{$tour[0]->nombre}}</h1>
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
          <!-- Comments section-->
      </div>
      <!-- Side widgets-->
      <div class="col-lg-5" style="margin-top: 10.5%;">
          <div class="card">
            <div class="card-header"><h5 class="card-title">Completa la compra</h5></div>
            
            <div class="card-body">
                
                <form id="clientes">

                  @csrf
                  <div class="row">

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="mb-3">
                      <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
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
                        <option value="pasaporte">Cédula de extranjería </option>
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
                      <textarea class="form-control" name="recomendacion" id="recomendacion" placeholder="Recomendaciones"></textarea>
                    </div>
                  </div>



                  <div class="card-footer">
                    <div class="mb-3">
                      <p class="fs-2 fw-bold text-muted"> PRECIO: {{$tour[0]->precio}} </p> 
                    </div>

                    <div class="mb-3">
                      <button class="btn btn-outline-success" name="comprar" id="comprar">COMPRAR</button>
                    </div>

                    <div id="respuesta">

                    </div>
                  </div>

                </form>
              </div>     
            </div>
          </div>
          
      </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $('#comprar').click(function (e) { 
      e.preventDefault();

      var nombre = $('#nombre').val();
      var apellido = $('#apellido').val();
      var correo = $('#correo').val();
      var indicativo = $('#indicativo').val();
      var telefono = $('#telefono').val();
      var pais = $('#pais').val();
      var identificacion = $('#identificacion').val();
      var num_identificacion = $('#num_identificacion').val();
      var token = $('input[name=_token]').val();

      if (nombre == "") {
        alert('No olvide colocar su nombre...')
        $('#nombre').focus();
      }

      if (apellido == "") {
        alert('No olvide colocar su apellido...')
        $('#apellido').focus();
      }

      if (correo == "") {
        alert('No olvide colocar su correo...')
        $('#correo').focus();
      }

      if (indicativo == "") {
        alert('No olvide colocar el indicativo de su pais...')
        $('#pais').focus();
      }

      if (telefono == "") {
        alert('No olvide colocar su telefono...')
        $('#telefono').focus();
      }

      if (pais == "") {
        alert('No olvide colocar su pais...')
        $('#pais').focus();
      }

      if (identificacion == "") {
        alert('No olvide colocar su tipo identificacion...')
        $('#identificacion').focus();
      }

      if (num_identificacion == "") {
        alert('No olvide colocar su identificacion...')
        $('#num_identificacion').focus();
      }

      var formdata = $('#clientes').serialize();


      $.ajax({
        type: "POST",
        url: "{{route('cliente.store')}}",
        data: formdata,
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
      
    });
  });
    
</script>


@endsection



