@extends('administracion.head')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="main-content">
    <section class="section">
        <div class="row justify-content-center">
            <div class="card col-md-12">
              @if (Session::has('Mensaje'))
                <div class="alert alert-success alert-dismissible show fade" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  {{Session::get('Mensaje')}}
                </div>
              @endif
              <div class="card-header">
                <h4>{{ __('Lista de detalles de compra') }}</h4>
                <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="search" name="search" class="form-control" placeholder="Buscar">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              @if($search ?? '')
                <div class="alert alert-primary alert-dismissible show fade" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  {{ __('Los resultados para la busqueda de') }} "<span>{{$search}}</span>" {{ __('son:') }}
                </div>
              @endif
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-md">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>{{ __('Titulo') }}</th>
                        <th>{{ __('Descripción') }}</th>
                        <th>{{ __('Acción') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($detalleCompras as $detalleCompra)
                      <tr>
                        <td>{{$detalleCompra->id}}</td>
                        <td>{{$detalleCompra->titulo}}</td>
                        <td>{{$detalleCompra->descripcion}}</td>
                        <td>
                          <a href="{{url ('preguntas/' .$detalleCompra->id. '/edit')}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                          <form  class="btn btn-xs" action="{{url ('preguntas/' .$detalleCompra->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-icon btn-danger" onclick="return confirm('Desea eliminar?');" data-toggle="modal"><i class="fa fa-trash-o"></i></button>
                          </form>                       
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              {{-- {{$detalleCompras->Links()}} --}}

            </div>
        </div>
    </section>
</div>
@endsection
