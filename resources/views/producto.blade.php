@extends('head')
@section('content')
    
<div class="page-title-overlap pt-4" style="background-image:  url('{{asset('img/marketplace/features/features-bg.jpg')}}');">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="{{ '/' }}"><i class="czi-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="*">Notebooks</a></li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">{{$producto->nombre}}</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">{{$producto->nombre}}</h1>
        </div>
    </div>
</div>

<section class="container mb-3 pb-3">
    <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
        <div class="row">
        <!-- Content-->
        <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-lg-3">
          <div class="pt-2 px-4 pr-lg-0 pl-xl-5">
            <!-- Product gallery-->
            <div class="cz-gallery" lg-uid="lg0">
                <a class="gallery-item rounded-lg mb-grid-gutter" href="{{asset ('img/marketplace/single/01.jpg') }}" data-sub-html="<h6 class=&quot;font-size-sm text-light&quot;>{{$producto->nombre}}</h6>">
                <img src="{{asset ('img/marketplace/single/01.jpg') }}" alt="Gallery preview"><span class="gallery-item-caption">{{$producto->nombre}}</span></a>
                <div class="row">
                    <div class="col-sm-6">
                        <a class="gallery-item rounded-lg mb-grid-gutter" href="{{asset ('img/marketplace/single/02.jpg') }}" data-sub-html="<h6 class=&quot;font-size-sm text-light&quot;{{$producto->nombre}}</h6>"><img src="{{asset ('img/marketplace/single/03.jpg') }}" alt="Gallery preview"><span class="gallery-item-caption">{{$producto->nombre}}</span></a></div>
                    <div class="col-sm-6"><a class="gallery-item rounded-lg mb-grid-gutter" href="{{asset ('img/marketplace/single/03.jpg') }}" data-sub-html="<h6 class=&quot;font-size-sm text-light&quot;>{{$producto->nombre}}</h6>"><img src="{{asset ('img/marketplace/single/03.jpg') }}" alt="Gallery preview"><span class="gallery-item-caption">{{$producto->nombre}}</span></a></div>
                </div>
            </div>
            <!-- Wishlist + Sharing-->
            <div class="d-flex flex-wrap justify-content-between align-items-center border-top pt-3">
              {{-- <div class="py-2 mr-2">
                <button class="btn btn-outline-accent" type="button"><i class="czi-heart font-size-lg mr-2"></i>Add to Favorites</button>
              </div> --}}
              <div class="py-2"><i class="czi-share-alt font-size-lg align-middle text-muted mr-2"></i><a class="social-btn sb-outline sb-facebook sb-sm ml-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-outline sb-twitter sb-sm ml-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-outline sb-pinterest sb-sm ml-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-outline sb-instagram sb-sm ml-2" href="#"><i class="czi-instagram"></i></a></div>
            </div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4">
          <hr class="d-lg-none">
          <div class="cz-sidebar-static h-100 ml-auto border-left">
            <div class="accordion" id="licenses">
              <div class="card border-top-0 border-left-0 border-right-0">
                <div class="card-header d-flex justify-content-between align-items-center py-3 border-0">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="license" id="license-std" checked="">
                    <label class="custom-control-label font-weight-medium text-dark" for="license-std" data-toggle="collapse" data-target="#standard-license">Precio total</label>
                  </div>
                  <h5 class="mb-0 text-accent font-weight-normal">${{$producto->precio}}</h5>
                </div>
                <div class="" id="standard-license" data-parent="#licenses">
                  <div class="card-body py-0 pb-2">
                    <ul class="list-unstyled font-size-sm">
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Disponible</span></li>
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Pago con tarjeta de crédito</span></li>
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Envío gratis</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <button class="btn btn-primary btn-shadow btn-block mt-4 mb-4" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-lg mr-2"></i>Agregar al carrito</button>
            <div class="bg-secondary rounded p-3 mb-2"><i class="czi-download h5 text-muted align-middle mb-0 mt-n1 mr-2"></i><span class="d-inline-block h6 mb-0 mr-1">715</span><span class="font-size-sm">Sales</span></div>
            <div class="bg-secondary rounded p-3 mb-4">
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div><span class="font-size-ms ml-2">4.1/5</span>
              <div class="font-size-ms text-muted">Basado en 613 reviews</div>
            </div>
            <ul class="list-unstyled font-size-sm">
              @foreach ($detalleCompras as $detalleCompra)
                <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">{{ $detalleCompra->titulo }}</span><span class="text-right">{{ $detalleCompra->descripcion }}</span></li>
              @endforeach
            </ul>
          </div>
        </aside>
      </div>
    </div>
</section>

<section class="container mb-4 mb-lg-5">
  <!-- Nav tabs-->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"><a class="nav-link p-4 active" href="#details" data-toggle="tab" role="tab">Detalles del producto</a></li>
  </ul>
  <div class="tab-content pt-2">
    <!-- Product details tab-->
    <div class="tab-pane fade show active" id="details" role="tabpanel">
      <div class="row">
        <div class="col-lg-8">
          <p class="font-size-md">{{ $producto->detalle }}</p>
          <h3 class="h5 pt-2">{{__('Detalles del producto')}}</h3>
          <ul class="font-size-md">
            <li>{{ $producto->detalle ?? '' }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>  
</section>

<section class="container mb-5 pb-lg-3">
  <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-4 mb-4">
    <h2 class="h3 mb-0 pt-2">Related mockups</h2>
    <div class="pt-2"><a class="btn btn-outline-accent btn-sm" href="marketplace-category.html">More mockups<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
  </div>
  <!-- Carousel-->
  <div class="cz-carousel">
    <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2 },&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:4}}}">
      <!-- Product-->
      <div>
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/02.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="#">Floating Phone and Tablet Mockup</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>109<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$15.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div>
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/03.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="#">Project Devices Showcase (PSD)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>95<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$18.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div>
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/08.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="#">Business Card Branding Mockup</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>316<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$17.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div>
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/07.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="#">Gravity Device Mockups (PSD)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>234<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection