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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Buscar</span>
            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div></a>
        </div>
        <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
          <!-- Search-->
          <div class="input-group-overlay d-lg-none my-3">
            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
            <input class="form-control prepended-form-control" type="text" placeholder="Search marketplace">
          </div>
          <!-- Categories dropdown-->
          {{-- <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
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
          </ul> --}}
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

 <!-- Footer-->
<footer class="bg-dark pt-5">
  <div class="container pt-2 pb-3">
    <div class="row">
      <div class="col-md-6 text-center text-md-left mb-4">
        <div class="text-nowrap mb-3"><a class="d-inline-block align-middle mt-n2 mr-2" href="#"><img class="d-block" width="117" src="img/footer-logo-light.png" alt="Pickbazar"/></a><span class="d-inline-block align-middle h5 font-weight-light text-white mb-0">Marketplace</span></div>
        <p class="font-size-sm text-white opacity-70 pb-1">High quality items created by our global community.</p>
        <h6 class="d-inline-block pr-3 mr-3 border-right border-light"><span class="text-primary">65,478 </span><span class="font-weight-normal text-white">Products</span></h6>
        <h6 class="d-inline-block pr-3 mr-3 border-right border-light"><span class="text-primary">2,521 </span><span class="font-weight-normal text-white">Members</span></h6>
        <h6 class="d-inline-block mr-3"><span class="text-primary">897 </span><span class="font-weight-normal text-white">Vendors</span></h6>
        <div class="widget mt-4 text-md-nowrap text-center text-md-left"><a class="social-btn sb-light sb-twitter mr-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-light sb-facebook mr-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-light sb-dribbble mr-2 mb-2" href="#"><i class="czi-dribbble"></i></a><a class="social-btn sb-light sb-behance mr-2 mb-2" href="#"><i class="czi-behance"></i></a><a class="social-btn sb-light sb-pinterest mr-2 mb-2" href="#"><i class="czi-pinterest"></i></a></div>
      </div>
      <!-- Mobile dropdown menu (visible on screens below md)-->
      <div class="col-12 d-md-none text-center mb-4 pb-2">
        <div class="btn-group dropdown d-block mx-auto mb-3">
          <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-toggle="dropdown">Categories</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Photos</a></li>
            <li><a class="dropdown-item" href="#">Graphics</a></li>
            <li><a class="dropdown-item" href="#">UI Design</a></li>
            <li><a class="dropdown-item" href="#">Web Themes</a></li>
            <li><a class="dropdown-item" href="#">Fonts</a></li>
            <li><a class="dropdown-item" href="#">Add-Ons</a></li>
          </ul>
        </div>
        <div class="btn-group dropdown d-block mx-auto">
          <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-toggle="dropdown">For members</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Licenses</a></li>
            <li><a class="dropdown-item" href="#">Return policy</a></li>
            <li><a class="dropdown-item" href="#">Payment methods</a></li>
            <li><a class="dropdown-item" href="#">Become a vendor</a></li>
            <li><a class="dropdown-item" href="#">Become an affiliate</a></li>
            <li><a class="dropdown-item" href="#">Marketplace benefits</a></li>
          </ul>
        </div>
      </div>
      <!-- Desktop menu (visible on screens above md)-->
      <div class="col-md-3 d-none d-md-block text-center text-md-left mb-4">
        <div class="widget widget-links widget-light pb-2">
          <h3 class="widget-title text-light">Categories</h3>
          <ul class="widget-list">
            <li class="widget-list-item"><a class="widget-list-link" href="#">Photos</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Graphics</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">UI Design</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Web Themes</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Fonts</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Add-Ons</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 d-none d-md-block text-center text-md-left mb-4">
        <div class="widget widget-links widget-light pb-2">
          <h3 class="widget-title text-light">For members</h3>
          <ul class="widget-list">
            <li class="widget-list-item"><a class="widget-list-link" href="#">Licenses</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Return policy</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Payment methods</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Become a vendor</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Become an affiliate</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Marketplace benefits</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Second row-->
  <div class="pt-5 bg-darker">
    <div class="container">
      <div class="widget w-100 mb-4 pb-3 text-center mx-auto" style="max-width: 28rem;">
        <h3 class="widget-title text-light pb-1">Subscribe to newsletter</h3>
        <form class="validate" action="https://studio.us12.list-manage.com/subscribe/post-json?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126&amp;c=?" method="get" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form">
          <div class="input-group input-group-overlay flex-nowrap">
            <div class="input-group-prepend-overlay"><span class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
            <input class="form-control prepended-form-control" type="email" name="EMAIL" id="mce-EMAIL" value="" placeholder="Your email" required>
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" name="subscribe" id="mc-embedded-subscribe">Subscribe*</button>
            </div>
          </div>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
            <input type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
          </div><small class="form-text text-light opacity-50" id="mc-helper">*Receive early discount offers, updates and new products info.</small>
          <div class="subscribe-status"></div>
        </form>
      </div>
      <hr class="hr-light pb-4 mb-3">
      <div class="d-md-flex justify-content-between">
        <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://templatehouse.net/" target="_blank">TemplateHouse</a></div>
        <div class="widget widget-links widget-light pb-4">
          <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
            <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Help Center</a></li>
            <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Affiliates</a></li>
            <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Support</a></li>
            <li class="widget-list-item ml-4"><a class="widget-list-link font-size-ms" href="#">Terms &amp; Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="cz-handheld-toolbar">
  <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
  </div>
</div>
<!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
<!-- JavaScript libraries, plugins and custom scripts-->
<script src="js/vendor.min.js"></script>
<script src="js/theme.min.js"></script>