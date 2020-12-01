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
        <form method="POST" action="{{ route ('productos.store')}}" enctype="multipart/form-data">
          @csrf             
          <div class="card-header">
            <h4>Agregar nuevo producto</h4>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="" autofocus="" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="">Precio regular</label>
                <input type="number" class="form-control" placeholder="Precio" name="precio" value="" autofocus="" required="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Marca</label>
                <input type="text" class="form-control" placeholder="Marca" name="marca" value="" autofocus="" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="">Categoría</label>
                <input type="number" class="form-control" placeholder="Categoría" name="" value="" autofocus="" required="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">Foto principal</label>
                <input type="file" class="form-control" name="fotoPrincipal">
              </div>
              <div class="form-group col-md-12">
                <label for="">Foto carousel</label>
                <input type="file" class="form-control" name="fotoCarousel">
              </div>
              <div class="form-group col-md-12">
                <label for="inputTaxId">Descripción</label>
                <textarea class="form-control" name="descripcion"></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">Cargar producto</button>
          </div>
        </form>
      </div>
    </div>
</section>
</div>
@endsection