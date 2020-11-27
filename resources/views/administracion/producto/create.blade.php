@extends('administracion.head')
@section('content')
    
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<section class="col-lg-8 pt-lg-4 pb-4 mb-3">
    <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
      <!-- Title-->
      <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
        <h2 class="h3 py-2 mr-2 text-center text-sm-left">{{__('Agregar nuevo producto')}}</h2>
        <div class="py-2">
          <select class="custom-select mr-2" id="unp-category">
            <option>Seleccionar una categoría</option>
          </select>
        </div>
      </div>
      <form method="POST" action="{{ route ('productos.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group pb-2">
          <label class="font-weight-medium" for="unp-product-name">{{__('Nombre del producto')}}</label>
          <input class="form-control" type="text" id="unp-product-name" name="nombre"><small class="form-text text-muted">{{__('Descripción del producto')}}</small>
        </div>

        <div class="cz-file-drop-area form-group">
          <label class="font-weight-medium" for="unp-product-name">{{__('Foto principal')}}</label>
          <div class="cz-file-drop-icon czi-cloud-upload"></div>
          <span class="cz-file-drop-message">Arrastre y suelte aquí para cargar la imagen del producto</span>
          <input class="cz-file-drop-input" type="file" name="fotoPrincipal">
          <button class="cz-file-drop-btn btn btn-primary btn-sm mb-2" type="button">O seleccione un archivo</button>
            <small class="form-text text-muted">1000 x 800px ideal</small>
        </div>

        <div class="form-group py-2">
          <label class="font-weight-medium" for="unp-product-description">{{__('Descripción del producto')}}</label>
          <textarea class="form-control" rows="6" id="unp-product-description" name="descripcion"></textarea>
          <div class="bg-secondary p-3 font-size-ms rounded-bottom"><span class="d-inline-block font-weight-medium mr-2 my-1">Markdown supported:</span><em class="d-inline-block border-right pr-2 mr-2 my-1">*Italic*</em><strong class="d-inline-block border-right pr-2 mr-2 my-1">**Bold**</strong><span class="d-inline-block border-right pr-2 mr-2 my-1">- List item</span><span class="d-inline-block border-right pr-2 mr-2 my-1">##Heading##</span><span class="d-inline-block">--- Horizontal rule</span></div>
        </div>

        <div class="row">
          <div class="col-sm-6 form-group">
            <label class="font-weight-medium" for="unp-standard-price">Precio del producto</label>
            <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
              <input class="form-control" type="text" id="unp-standard-price" name="precio">
            </div><small class="form-text text-muted">Precio final del producto</small>
          </div>
          <div class="col-sm-6 form-group">
            {{-- <label class="font-weight-medium" for="unp-extended-price">Extended license price</label>
            <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text"><i class="czi-dollar"></i></span></div>
              <input class="form-control" type="text" id="unp-extended-price">
            </div><small class="form-text text-muted">Typically 10x of the Standard license price.</small> --}}
          </div>
        </div>
        {{-- <div class="form-group py-2">
          <label class="font-weight-medium" for="unp-product-tags">Tags del producto</label>
          <textarea class="form-control" rows="4" id="unp-product-tags"></textarea><small class="form-text text-muted">Up to 10 keywords that describe your item. Tags should all be in lowercase and separated by commas.</small>
        </div> --}}
        {{-- <div class="form-group pb-2">
          <label class="font-weight-medium" for="unp-product-files">Product files for sale</label>
          <div class="custom-file">
            <input class="custom-file-input" type="file" id="unp-product-files">
            <label class="custom-file-label" for="unp-product-files">Upload .zip</label>
          </div><small class="form-text text-muted">Maximum file size is 1GB</small>
        </div> --}}
        <button class="btn btn-primary btn-block" type="submit"><i class="czi-cloud-upload font-size-lg mr-2"></i>Cargar producto</button>
      </form>
    </div>
  </section>

@endsection