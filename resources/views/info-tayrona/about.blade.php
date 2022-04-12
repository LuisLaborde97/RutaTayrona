
@extends('index')

@section('title', 'Sobre Nosotros')

@section('active', 'active')

@section('content')

      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="{{asset('images/logo-about.png')}}" alt="" width="519" height="564"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Por qué escogernos?</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">¿Quienes Somos?</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Misión</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Visión</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>Somos una agencia de viajes 
                      enfocada en comercializar y 
                      operar experiencias en los 
                      diferentes destinos turísticos del 
                      caribe colombiano.
                      Contamos con un extenso equipo 
                      de trabajo que trabajan 
                      arduamente para brindarle la 
                      mejor solución a tu viaje, también 
                      contamos con una amplia red de 
                      aliados cuidadosamente 
                      seleccionados que nos permiten 
                      ofrecer más de 20 excursiones 
                      diferentes a nuestros visitantes.
                      Nos caracterizamos por hablar el 
                      idioma de nuestros clientes.
                      </p>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-secondary">
                      <div class="progress-header">
                        <p>Tours</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">97</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-orange">
                      <div class="progress-header">
                        <p>Excursiones</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">95</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear">
                      <div class="progress-header">
                        <p>Hoteles</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">88</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <p><p>Brindar a nuestros clientes las 
                      mejores experiencias turísticas en 
                      su visita al caribe colombiano, 
                      siendo respetuoso con el medio 
                      ambiente y preservando las 
                      culturas que habitan en esta 
                      región.
                      </p>
                      </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                      Impulsar los atractivos de la zona 
                      creando y diseñando nuevos 
                      destinos con alto potencial 
                      turístico, de tal manera que 
                      seamos generadores de empleo y 
                      bienestar en las comunidades que 
                      habitan en la región. Promover el 
                      turismo sostenible, preservar las 
                      culturas ancestrales y fomentar la 
                      educación en las zonas de 
                      injerencia.
                    <div class="group-md group-middle"><a class="button button-black-outline button-md" href="{{asset('download/Portafolio.pdf')}}" download="PortafolioRutaTaryrona">Descargar Portafolio</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- What people Say-->
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h3>Que dicen las personas?</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-16-100x100.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">Con Ruta Tayrona Tours podrás vivir las mejores experiencias en el caribe.
                    Podrás disfrutar del magnífico parque tayrona conocer las comunidades indígenas y sus lugares ancestrales como Cuidad Perdida.</p>
                </div>
                <h5 class="quote-lisa-cite">Carlos Piro</a></h5>
                <p class="quote-lisa-status">Cliente Regular</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-17-100x100.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">Tuve la fortuna de realizar el tour de Minca en la Sierra Nevada de Santa Marta. Un destino cercano a la ciudad, conectado con buena vía y lleno de atractivos como el tour del café en la finca La Victoria, espectaculares paisajes a lo largo del camino y el refrescante baño en las frías aguas de las cascadas. Recomendado</p>
                </div>
                <h5 class="quote-lisa-cite">JABA Net</a></h5>
                <p class="quote-lisa-status">Cliente Regular</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-18-100x100.jpg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">Una hermosa experiencia, ir a Nunca y disfrutar de todo lo que tiene para brindarnos, super recomendado, ven y conoce este hermoso lugar 🥰🥰👌</p>
                </div>
                <h5 class="quote-lisa-cite">Mayra Fernandez</a></h5>
                <p class="quote-lisa-status">Cliente Regular </p>
              </div>
            </article>
          </div>
        </div>
      </section>

      @endsection
      