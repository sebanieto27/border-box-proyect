@extends('head')
@section('content')

<div class="bg-accent pt-4 pb-5">
    <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
      <div class="d-lg-flex justify-content-between pb-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{ '/' }}"><i class="czi-home"></i>{{ __('Inicio') }}</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="*">Resultados</a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page"></li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">{{ __('Resultados de busqueda') }}</h1>
        </div>
      </div>
    </div>
</div>

<div class="container pb-5 mb-2 mb-md-4">
    <!-- Toolbar-->
    <div class="bg-light box-shadow-lg rounded-lg mt-n5 mb-4">
      <div class="d-flex align-items-center pl-2">
        <!-- Search-->
        <div class="input-group-overlay">
            <form action="{{ route('search') }}" method="GET" role="search">
                {{ csrf_field() }}
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control prepended-form-control border-0 box-shadow-0" type="text" placeholder="Busca en nuestra web...">
            </form>
        </div>
        <!-- Sort-->
        <div class="d-flex align-items-center">
          <div class="dropdown py-4 border-left"><a class="nav-link-style font-size-md font-weight-medium dropdown-toggle p-4" href="#" data-toggle="dropdown"><span class="d-inline-block py-1"><i class="czi-thumb-up align-middle opacity-60 mt-n1 mr-2"></i>Popular</span></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="#"><i class="czi-flag mr-2 opacity-60"></i>Newest</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-rocket mr-2 opacity-60"></i>Bestsellers</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-loading mr-2 opacity-60"></i>Updated</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-arrow-down mr-2 opacity-60"></i>Low Price</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-arrow-up mr-2 opacity-60"></i>High Price</a></li>
            </ul>
          </div>
        </div>
        <!-- Pagination-->
        <div class="d-none d-md-flex align-items-center border-left pl-4"><span class="font-size-md text-nowrap mr-4">Pages&nbsp; 1 / 5</span><a class="nav-link-style p-4 border-left" href="#"><span class="d-inline-block py-1"><i class="czi-arrow-left"></i></span></a><a class="nav-link-style p-4 border-left" href="#"><span class="d-inline-block py-1"><i class="czi-arrow-right"></i></span></a></div>
      </div>
    </div>
    <!-- Products grid-->
    <div class="row pt-3 mx-n2">
      <!-- Product-->
        @foreach ($productos as $producto)    
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
                <div class="card product-card-alt">
                    <div class="product-thumb">
                      <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                      <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                        <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                      </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="{{url ('fotoPrincipal/' .$producto->id)}}" alt="Product">
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                        <div class="text-muted font-size-xs mr-1"><a class="product-meta font-weight-medium" href="#">{{$producto->categoria->nombre}} - {{$producto->marca}}</div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                        </div>
                      </div>
                      <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">{{$producto->nombre}}</a></h3>
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="font-size-sm mr-2"><i class="czi-delivery text-muted mr-1"></i><span class="font-size-xs ml-1">{{ __('Envíos a todo el país') }}</span></div>
                        <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">${{ $producto->precio }},<small>00</small></div>
                      </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <hr class="my-3">
    <!-- Pagination-->
    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
        <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>
      </ul>
    </nav>
</div>


@endsection