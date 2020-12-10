@extends('layouts.head')
@section('content')

<body>
    <div class="loader"></div>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
              <div class="card card-primary">
                <div class="card-header justify-content-center">
                    <img alt="image" src="{{asset ('img/logo-borderBox.svg') }}" class="header-logo" style="width: 250px;" />
                </div>
                <h4 class=" text-center">{{ __('Login') }}</h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{('Email')}}</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                            {{ __('Por favor, ingresa tu mail') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">{{ __('Password') }}</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                           {{ __('Por favor, ingresa tu password') }}
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me">{{ __('Recordarme') }}</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        {{ __('Login') }}
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="{{asset ("dashboard/js/app.min.js")}}"></script>
    <!-- JS Libraies -->
    <script src="{{asset ('dashboard/bundles/chartjs/chart.min.js')}}"></script>
    <script src="{{asset ('dashboard/bundles/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset ('dashboard/bundles/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset ('dashboard/bundles/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset ('dashboard/bundles/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset ('dashboard/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js')}}"></script>
    <!-- Page Specific JS File -->
    <script src="{{asset ('dashboard/js/page/index2.js')}}"></script>
    <script src="{{asset ('dashboard/js/page/todo.js')}}"></script>
    <!-- Template JS File -->
    <script src="{{asset ('dashboard/js/scripts.js')}}"></script>
    <!-- Custom JS File -->
    <script src="{{asset ('dashboard/js/custom.js')}}"></script>

@endsection
