@extends('administracion.head')

@section('content')
<div class="main-content" style="min-height: 294px;">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Lista de productos</h4>
        <div class="card-header-form">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          @if (Session::has('Mensaje'))
            <div class="alert alert-success alert-dismissible show fade" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              {{Session::get('Mensaje')}}
            </div>
          @endif
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>#</th>
                <th>{{ __('Nombre') }}</th>
                <th>{{ __('Precio') }}</th>
                <th>{{ __('Categoría') }}</th>
                <th>{{ __('Estado') }}</th>
                <th>{{ __('Acciones') }}</th>
              </tr>
              @foreach ($productos as $producto)
                <tr>
                  <td>{{$producto->id}}</td>
                  <td>{{$producto->nombre}}</td>
                  <td>{{$producto->precio}}</td>
                  <td>{{$producto->categoria->nombre}}</td>
                  <td>
                    <div class="badge badge-success">{{ __('Activado') }}</div>
                  </td>
                  <td>
                    <a href="{{url ('productos/' .$producto->id )}}" class="btn btn-icon btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="{{url ('productos/' .$producto->id. '/edit' )}}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                    <form class="btn btn-xs" action="{{url ('productos/' .$producto->id)}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                      <button type="submit" class="btn btn-icon btn-danger" onclick="return confirm('Desea eliminar?');" data-toggle="modal"><i class="fas fa-trash-alt" style="color: #fff"></i></button>
                    </form>
                  </td>
                </tr> 
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{ $productos->links() }}
    </div>
  </div>
</div>
@endsection