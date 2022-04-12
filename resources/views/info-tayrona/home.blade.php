@extends('index')

@section('title', 'Ruta Tayrona')

@section('content')


<!-- Swiper-->

<section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
  <div class="swiper-wrapper text-left">
    @foreach ($tours as $i)

    <div class="swiper-slide context-dark" data-slide-bg="{{asset($i->url)}}">
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h4 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">{{$i->nombre}}</h3>
              <h3 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span class="font-weight-bold">{{$i->presentacion}}</span></h2><a class="button button-default-outline button-ujarak" href="{{route('tour',$i->id)}}" data-caption-animate="fadeInLeft" data-caption-delay="0">Mas Información</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endforeach
  </div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination"></div>
</section>
  <!-- Section Box Categories-->
  <section class="section section-lg section-top-1 bg-gray-4">
    <div class="container offset-negative-1">
      <div class="box-categories cta-box-wrap">
        <div class="box-categories-content">
          <div class="row justify-content-center">
                @foreach ($tours2 as $item)
                    
                
            <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
              <ul class="list-marked-2 box-categories-list">
                <li><a href="{{route('tour',$item->id)}}"><img src="{{$item->url}}" alt="" width="368" height="420"/></a>
                  <h5 class="box-categories-title">{{$item->nombre}}</h5>
                </li>
              </ul>
            </div>

            @endforeach
        </div>
      
      <!-- Owl Carousel-->
    </div>
  </div><a class="link-classic wow fadeInUp" href="{{route('Tours')}}">OTRAS EXPERIENCIAS<span></span></a>
  </section>
  
  
  <!-- Hot tours-->
  <section class="section section-sm bg-default">
    <div class="container">
      <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Tours Populares</span></h3>
      <div class="row row-sm row-40 row-md-50">
        @foreach ($tours2 as $i)
            
        
        <div class="col-sm-6 col-md-12 wow fadeInRight">
          <!-- Product Big-->
          <article class="product-big">
            <div class="unit flex-column flex-md-row align-items-md-stretch">
              <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{$i->url}}" alt="" width="600" height="366"/></a></div>
              <div class="unit-body">
                <div class="product-big-body">
                  <h5 class="product-big-title"><a href="#">{{$i->nombre}}, Colombia</a></h5>
                  <div class="group-sm group-middle justify-content-start">
                    <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div>
                  </div>
                  <p class="product-big-text">{{$i->descripcion}}</p><a class="button button-black-outline button-ujarak" href="{{route('tour',$i->id)}}">Compra Aquí</a>
                  <div class="product-big-price-wrap"><span class="product-big-price">${{$i->precio}}</span></div>
                </div>
              </div>
            </div>
          </article>
        </div>

        @endforeach

      </div>
    </div>
  </section>
  <!-- Different People-->
  <section class="section section-sm">
    <div class="container">
      <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Soporte</span></h3>
      <div class="row row-30 justify-content-center box-ordered">
        <div class="col-sm-6 col-md-5 col-lg-3">
          <!-- Team Modern-->
          <article class="team-modern">
            <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-1-118x118.jpg" alt="" width="118" height="118"/></a>
              <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                <g>
                  <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                </g>
              </svg>
            </div>
            <div class="team-modern-caption">
              <h6 class="team-modern-name"><a href="#">Ruta Tayrona</a></h6>
              <p class="team-modern-status">Asesor</p>
              <h6 class="team-modern-phone"><a href="https://wa.me/573145502928?text=Me%20interesa%20conocer%20sobre%20un%20tour" target="_blank">+57 (314)5502928</a></h6>
            </div>
          </article>
        </div>

      </div>
    </div>
  </section>

  @endsection