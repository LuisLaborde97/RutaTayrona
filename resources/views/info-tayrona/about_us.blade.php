
@extends('index_us')

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
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Why choose us?</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Who are us?</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Mission</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Vision</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>We are a travel agency 
                      focused on marketing and operating 
                      operating experiences in the different 
                      different tourist destinations in the Colombian 
                      Colombian Caribbean.
                      We have an extensive team 
                      team that work hard to provide 
                      hard to provide you with the best 
                      best solution for your trip, we also 
                      we also have a wide network of 
                      carefully selected 
                      carefully selected partners that allow us to 
                      to offer more than 20 different excursions 
                      different excursions to our visitors.
                      We are known for speaking the 
                      language of our clients.
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
                        <p>Excursions</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">95</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear">
                      <div class="progress-header">
                        <p>Hotels</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">88</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <p><p>To provide our clients with the best 
                      best tourist experiences in their visit to the 
                      their visit to the Colombian Caribbean, 
                      respecting the environment and preserving 
                      environment and preserving the 
                      preserving the cultures that inhabit this region. 
                      region.
                      </p>
                      </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    Promote the attractions of the area 
                    creating and designing new destinations 
                    destinations with high tourist potential 
                    tourism potential, in such a way that 
                    generate employment and wellbeing in the 
                    and wellbeing in the communities that 
                    communities living in the region. Promote sustainable 
                    sustainable tourism, preserve ancestral 
                    preserve ancestral cultures and promote 
                    education in the areas of 
                    areas.
                    <div class="group-md group-middle"><a class="button button-black-outline button-md" href="{{asset('download/Portafolio.pdf')}}" download="PortafolioRutaTaryrona">Download Portafolio</a></div>
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
          <h3>What do people say?</h3>
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
      