@extends('head')

@section('content')

<body>

    <section class="bg-accent bg-position-center-top bg-no-repeat py-5" style="background-image: url(img/home/marketplace-hero.jpg);">
      <div class="pb-lg-5 mb-lg-3">
        <div class="container py-lg-5 my-lg-5">
          <div class="row mb-4 mb-sm-5">
            <div class="col-lg-7 col-md-9 text-center text-sm-left">
              <h1 class="text-white line-height-base"><span class='font-weight-light'>Las mejores</span> notebooks <span class='font-weight-light'> del mercado y con los mejores precios.</span> Paga en pesos, <span class='font-weight-light'>&amp;</span> en cuotas <span class='font-weight-light'>6, 12 y 18.</span></h1>
              <h2 class="h5 text-white font-weight-light">No lo dudes, consultanos por diferentes modelos.</h2>
            </div>
          </div>
          <div class="row pb-lg-5 mb-4 mb-sm-5">
            <div class="col-lg-6 col-md-8">
              <div class="input-group input-group-overlay input-group-lg">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control form-control-lg prepended-form-control rounded-right-0" type="text" placeholder="Start your search">
                <div class="input-group-append">
                  <button class="btn btn-primary btn-lg dropdown-toggle font-size-base" type="button" data-toggle="dropdown">All categories</button>
                  <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Photos</a><a class="dropdown-item" href="#">Graphics</a><a class="dropdown-item" href="#">UI Design</a><a class="dropdown-item" href="#">Web Themes</a><a class="dropdown-item" href="#">Add-Ons</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured products (Carousel)-->
    <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
      <div class="card px-lg-2 border-0 box-shadow-lg">
        <div class="card-body px-4 pt-5 pb-4">
          <h2 class="h3 text-center">Discover featured products</h2>
          <p class="text-muted text-center">Every week we hand-pick some of the best items from our collection</p>
          <!-- Carousel-->
          <div class="cz-carousel pt-4">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
              <!-- Product-->
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/02.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                      <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                      </div>
                    </div>
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Floating Phone and Tablet Mockup (PSD)</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>109<span class="font-size-xs ml-1">Sales</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$15.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/03.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                      <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                      </div>
                    </div>
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Project Devices Showcase (PSD)</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>95<span class="font-size-xs ml-1">Sales</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$18.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/08.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                      <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                      </div>
                    </div>
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Business Card Branding Mockup</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>316<span class="font-size-xs ml-1">Sales</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$17.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/07.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                      <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                      </div>
                    </div>
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Gravity Device Mockups (PSD)</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>234<span class="font-size-xs ml-1">Sales</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Recent products grid-->
    <section class="container pb-5 mb-lg-3">
      <!-- Heading-->
      <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-3 mr-2">Nuestras notebooks recomendadas</h2>
        {{-- <div class="pt-3">
          <select class="custom-select">
            <option>All categories</option>
            <option>Photos</option>
            <option>Graphics</option>
            <option>UI Design</option>
            <option>Web Themes</option>
            <option>Fonts</option>
            <option>Add-Ons</option>
          </select>
        </div> --}}
      </div>
      <!-- Grid-->
      <div class="row pt-2 mx-n2">
        <!-- Product-->
        @foreach ($productos as $producto)
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <!-- Product-->
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/01.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">UI Design</a></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
                <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Square Style Mobile UI Kit (Sketch)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>153<span class="font-size-xs ml-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$24.<small>00</small></div>
                </div>
              </div>
            </div>
          </div> 
        @endforeach
        
      </div>
      <!-- More button-->
      <div class="text-center"><a class="btn btn-outline-accent" href="marketplace-category.html">View more products<i class="czi-arrow-right font-size-ms ml-1"></i></a></div>
    </section>
    <!-- Seller of the month-->
    <section class="border-top py-5">
      <div class="container py-lg-2">
        <h2 class="h3 mb-3 pb-3 pb-lg-4 text-center">Seller of the month</h2>
        <div class="row">
          <div class="col-lg-4 text-center text-lg-left pb-3 pt-lg-2">
            <div class="d-inline-block text-left">
              <div class="media media-ie-fix align-items-center pb-3">
                <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/marketplace/account/avatar.png" alt="TemplateHouse"></div>
                <div class="media-body pl-3">
                  <h3 class="font-size-lg mb-0">TemplateHouse</h3><span class="d-block text-muted font-size-ms pt-1 pb-2">Member since November 2017</span><a class="btn btn-primary btn-sm" href="marketplace-vendor.html">View products</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="cz-carousel">
              <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
                <div>
                  <div class="card product-card-alt">
                    <div class="product-thumb">
                      <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                      <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                        <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                      </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/13.jpg" alt="Product">
                    </div>
                    <div class="card-body">
                      <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Hardcover Book Catalog Mockup</a></h3>
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>39<span class="font-size-xs ml-1">Sales</span></div>
                        <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$12.<small>00</small></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card product-card-alt">
                    <div class="product-thumb">
                      <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                      <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                        <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                      </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/14.jpg" alt="Product">
                    </div>
                    <div class="card-body">
                      <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Top View Smartwatch 3D Render</a></h3>
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>28<span class="font-size-xs ml-1">Sales</span></div>
                        <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$14.<small>00</small></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="card product-card-alt">
                    <div class="product-thumb">
                      <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                      <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single.html"><i class="czi-eye"></i></a>
                        <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                      </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/07.jpg" alt="Product">
                    </div>
                    <div class="card-body">
                      <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single.html">Gravity Device Mockups (PSD)</a></h3>
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>234<span class="font-size-xs ml-1">Sales</span></div>
                        <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Marketplace features-->
    <section class="bg-accent bg-size-cover bg-position-center pt-5 pb-4 pb-lg-5" style="background-image: url(img/marketplace/features/features-bg.jpg);">
      <div class="container pt-lg-3">
        <h2 class="h3 mb-3 pb-4 text-light text-center">Why our marketplace?</h2>
        <div class="row pt-lg-2 text-center">
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/quality.png" width="52" alt="Quality Guarantee">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Quality Guarantee</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">Quality checked by our team</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/support.png" width="52" alt="Customer Support">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Customer Support</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/updates.png" width="52" alt="Free Updates">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Lifetime Free Updates</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">Never pay for an update</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-grid-gutter">
            <div class="d-inline-block">
              <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/secure.png" width="52" alt="Secure Payments">
                <div class="media-body pl-3">
                  <h6 class="text-light font-size-base mb-1">Secure Payments</h6>
                  <p class="text-light font-size-ms opacity-70 mb-0">We posess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog posts carousel-->
    <section class="py-5">
      <div class="container py-lg-3">
        <h2 class="h3 text-center">From the blog</h2>
        <p class="text-muted text-center mb-3 pb-4">Latest marketplace news, success stories and tutorials</p>
        <div class="cz-carousel">
          <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
            <div>
              <div class="card"><a class="blog-entry-thumb" href="blog-single.html"><img class="card-img-top" src="img/blog/05.jpg" alt="Post"></a>
                <div class="card-body">
                  <h2 class="h6 blog-entry-title"><a href="blog-single.html">We start selling WordPress themes soon</a></h2>
                  <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                  <div class="font-size-xs text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Nov 23</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="czi-message"></i>19</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"><a class="blog-entry-thumb" href="blog-single.html"><img class="card-img-top" src="img/blog/06.jpg" alt="Post"></a>
                <div class="card-body">
                  <h2 class="h6 blog-entry-title"><a href="blog-single.html">Shoot like a pro. Tips &amp; tricks</a></h2>
                  <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                  <div class="font-size-xs text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Oct 10</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="czi-message"></i>28</a></div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"><a class="blog-entry-thumb" href="blog-single.html"><img class="card-img-top" src="img/blog/07.jpg" alt="Post"></a>
                <div class="card-body">
                  <h2 class="h6 blog-entry-title"><a href="blog-single.html">Designing engaging mobile experiences</a></h2>
                  <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                  <div class="font-size-xs text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Sep 15</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.html#comments"><i class="czi-message"></i>46</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- More button-->
        <div class="text-center pt-4 mt-md-2"><a class="btn btn-outline-accent" href="blog-grid-sidebar.html">Ream more posts<i class="czi-arrow-right font-size-ms ml-1"></i></a></div>
      </div>
    </section>
    <!-- Toast: Added to Cart-->
    <div class="toast-container toast-bottom-center">
      <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
          <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
          <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
      </div>
    </div>
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
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- JavaScript libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>



@endsection
  
</html>