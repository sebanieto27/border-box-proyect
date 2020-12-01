@extends('head')

@section('content')

<body>

    <section class="bg-accent bg-position-center-top bg-no-repeat py-5" style="background-image: url(img/home/marketplace-hero2.jpg);">
      <div class="pb-lg-5 mb-lg-3">
        <div class="container py-lg-5 my-lg-5">
          <div class="row mb-4 mb-sm-5">
            <div class="col-lg-7 col-md-9 text-center text-sm-left">
              <h1 class="text-white line-height-base"><span class='font-weight-light'>Las mejores</span> notebooks <span class='font-weight-light'> del mercado y con los mejores precios.</span> Paga en pesos, <span class='font-weight-light'>&amp;</span> en cuotas <span class='font-weight-light'>6, 12 y 18.</span></h1>
              <h2 class="h5 text-white font-weight-light">No lo dudes, consultanos por diferentes modelos.</h2>
            </div>
          </div>
          <div class="row pb-lg-5 mb-4 mb-sm-5">
            <div class="col-lg-6 col-md-8">
              <div class="input-group input-group-overlay input-group-lg">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control form-control-lg prepended-form-control rounded-right-0" type="text" placeholder="Busca tu próxima notebook">
                <div class="input-group-append">
                  <button class="btn btn-primary btn-lg font-size-base" type="button">Buscar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured products (Carousel)-->
    <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
      <div class="card px-lg-2 border-0 box-shadow-lg">
        <div class="card-body px-4 pt-5 pb-4">
          <h2 class="h3 text-center">Nuestros recomendados</h2>
          <p class="text-muted text-center">Cada semana seleccionamos a mano algunos de los mejores artículos de nuestra colección</p>
          <!-- Carousel-->
          <div class="cz-carousel pt-4">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
              
              <!-- Product-->
              @foreach ($productos as $producto)
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/08.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                      <div class="text-muted font-size-xs mr-1"><a class="product-meta font-weight-medium" href="#">Notebook - {{$producto->marca}}</div>
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                      </div>
                    </div>
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Business Card Branding Mockup</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-delivery text-muted mr-1"></i><span class="font-size-xs ml-1">Envíos a todo el país</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$17.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              
              <!-- Product-->
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Recent products grid-->
    <section class="container pb-5 mb-lg-3">
      <!-- Heading-->
      <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-3 mr-2">Notebooks recomendadas</h2>
        {{-- <div class="pt-3">
          <select class="custom-select">
            <option>All categories</option>
            <option>Photos</option>
            <option>Graphics</option>
            <option>UI Design</option>
            <option>Web Themes</option>
            <option>Fonts</option>
            <option>Add-Ons</option>
          </select>
        </div> --}}
      </div>
      <!-- Grid-->
      <div class="row pt-2 mx-n2">
        <!-- Product-->
        @foreach ($productos as $producto)
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <!-- Product-->
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/01.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted font-size-xs mr-1"><a class="product-meta font-weight-medium" href="#">Notebook - {{$producto->marca}}</a></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
                <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">{{$producto->nombre}}</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="font-size-sm mr-2"><i class="czi-delivery text-muted mr-1"></i><span class="font-size-xs ml-1">Envíos a todo el país</span></div>
                  <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">${{$producto->precio}},<small>00</small></div>
                </div>
              </div>
            </div>
          </div> 
        @endforeach

      </div>
      <!-- More button-->
      {{-- <div class="text-center"><a class="btn btn-outline-accent" href="marketplace-category.html">Ver más productos<i class="czi-arrow-right font-size-ms ml-1"></i></a></div> --}}
    </section>
    
    <!-- Marketplace features-->
    <section class="bg-accent bg-size-cover bg-position-center pt-5 pb-4 pb-lg-5" style="background-image: url(img/marketplace/features/features-bg.jpg);">
      <div class="container pt-lg-3">
        <h2 class="h3 mb-3 pb-4 text-light text-center">¿Por que con nosotros?</h2>
        <div class="row pt-lg-2 text-center">
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/quality.png" width="52" alt="Quality Guarantee">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Entrega garantizada</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">Garantizamos la entrega de los equipos</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/support.png" width="52" alt="Customer Support">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Atención personalizada</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">Consultas 24/7</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/updates.png" width="52" alt="Free Updates">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Lifetime Free Updates</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">Never pay for an update</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/secure.png" width="52" alt="Secure Payments">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Pagos seguros</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">Trabajamos con </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog posts carousel-->
    <section class="py-5">
      <div class="container py-lg-3">
        <h2 class="h3 text-center">Contacto</h2>
        <p class="text-muted text-center mb-3 pb-4">Dejanos tus consultas, nos contactaremos a la brevedad!</p>
        <div class="container-fluid px-0" id="map">
          <div class="row no-gutters">
            <div class="col-lg-6 iframe-full-height-wrap px-4 px-xl-5 py-5 border-top">
              <iframe class="iframe-full-height" width="600" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.224263224704!2d-64.48123138431271!3d-31.407946702987747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942d668a77a58743%3A0xd0b79d4b6d0e584!2sGdor.%20Ferreyra%2037%2C%20X5152%20Villa%20Carlos%20Paz%2C%20C%C3%B3rdoba!5e0!3m2!1ses-419!2sar!4v1606486895585!5m2!1ses-419!2sar"></iframe>
            </div>
            <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
              <h2 class="h4 mb-4">Dejanos tus datos</h2>
              <form class="needs-validation mb-3" novalidate="">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cf-name">Tu nombre:&nbsp;<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" id="cf-name" placeholder="Nombre y apellido" required="">
                      <div class="invalid-feedback">Por favor ingresa un nombre!</div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cf-email">Dirección de Email:&nbsp;<span class="text-danger">*</span></label>
                      <input class="form-control" type="email" id="cf-email" placeholder="ejemplo@email.com" required="">
                      <div class="invalid-feedback">Por favor ingresa un email válido!</div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cf-phone">Teléfono:&nbsp;<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" id="cf-phone" placeholder="(3541) 00 000 000" required="">
                      <div class="invalid-feedback">Por favor ingresa un número válido!</div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="cf-subject">Motivo:</label>
                      <input class="form-control" type="text" id="cf-subject" placeholder="Proporcione un título breve de su solicitud">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="cf-message">Mensaje:&nbsp;<span class="text-danger">*</span></label>
                  <textarea class="form-control" id="cf-message" rows="6" placeholder="Por favor describe tu consulta" required=""></textarea>
                  <div class="invalid-feedback">Por favor ingresa mensaje!</div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar mensaje</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Toast: Added to Cart-->
    <div class="toast-container toast-bottom-center">
      <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
          <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
          <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
      </div>
    </div>
  </body>
@endsection
