@extends('administracion.head')
@section('content')
    
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="main-content" style="min-height: 530px;">
  <section class="section">
    <div class="row justify-content-center">
      <div class="card col-md-8">           
          <div class="card-header">
            <h4>{{ __('Detalle de producto')}} {{$producto->nombre}}</h4>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">{{ __('Nombre') }}</label>
                <p class="form-control">{{$producto->nombre}}</p>
              </div>
              <div class="form-group col-md-6">
                <label for="">{{ __('Precio regular')}}</label>
                <p class="form-control">{{$producto->precio}}</p>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">{{ __('Marca')}}</label>
                <p class="form-control">{{$producto->marca}}</p>
              </div>
              <div class="form-group col-md-6">
                <label for="">{{ __('Categoría')}}</label>
                <p class="form-control">{{$producto->categoria ?? ''}}</p>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">{{ __('Foto principal') }}</label>
                  <div class="product-thumb">
                    <img src="{{ route('fotoPrincipal', [ 'id'=> $producto->id ]) }}" alt="Product" style="height: 250px;">
                  </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="fotoCarousel">{{ __('Foto carousel') }}</label>
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                  @foreach ($fotoCarousel as $foto)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <a href="{{ route('displayFotoCarousel', [ 'id'=> $foto->id ]) }}" data-sub-html="Demo Description">
                        <img class="img-responsive thumbnail" src="{{ route('displayFotoCarousel', [ 'id'=> $foto->id ]) }}" alt="" style="height: 250px;">
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label >{{ __('Descripción') }}</label>
                <p class="form-control">{{$producto->descripcion}}</p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{url ('productos/' .$producto->id. '/edit' )}}" class="btn btn-primary" type="submit">{{ __('Editar producto')}}</a>
          </div>
      </div>
    </div>
</section>
</div>
@endsection