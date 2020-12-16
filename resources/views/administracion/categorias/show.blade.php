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
          <h4>{{ __('Detalle de categoría')}} {{$categoria->nombre}}</h4>
        </div>
        <div class="card-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">{{ __('Nombre') }}</label>
              <p class="form-control">{{$categoria->nombre}}</p>
            </div>
          </div>
          <div class="card-footer">
            <a href="{{url ('categorias/' .$categoria->id. '/edit' )}}" class="btn btn-primary" type="submit">{{ __('Editar categoría')}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection