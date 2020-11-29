<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>BorderBox | Tu nueva notebook esta aquí
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="BorderBox | Tu nueva notebook esta aquí">
    <meta name="keywords" content="BorderBox, notebook, cordoba, carlos paz">
    <meta name="author" content="Clickando">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="{{asset ('image/png')}}" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="{{asset ('image/png')}}" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="*">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset ('css/vendor.min.css')}}">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" id="main-styles" href="{{asset ('css/theme.min.css')}}">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'http://html.templatehouse.net/www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>

  <header class="bg-light box-shadow-sm navbar-sticky">
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="{{url ('/')}}" style="min-width: 7rem;"><img width="175" src="img/logo-borderBox.svg" alt="Pickbazar"/></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="index-2.html" style="min-width: 4.625rem;"><img width="74" src="img/logo-borderBox.svg" alt="Pickbazar"/></a>
        <!-- Toolbar-->
        <div class="navbar-toolbar d-flex align-items-center order-lg-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div></a>
        </div>
        <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
          <!-- Search-->
          <div class="input-group-overlay d-lg-none my-3">
            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
            <input class="form-control prepended-form-control" type="text" placeholder="Search marketplace">
          </div>
          <!-- Categories dropdown-->
          <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-menu align-middle mt-n1 mr-2"></i>Categories</a>
              <ul class="dropdown-menu py-1">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Notebooks</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item product-title font-weight-medium"><a href="#">Notebooks<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Notebooks</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!-- Primary menu-->
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{url ('contacto')}}">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Search collapse-->
    <div class="search-box collapse" id="searchBox">
      <div class="card pt-2 pb-4 border-0 rounded-0">
        <div class="container">
          <div class="input-group-overlay">
            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
            <input class="form-control prepended-form-control" type="text" placeholder="Search marketplace">
          </div>
        </div>
      </div>
    </div>
</header>

  @yield('content')
  
  <script src="js/vendor.min.js"></script>
  <script src="js/theme.min.js"></script>
  {{-- @include('footer') --}}