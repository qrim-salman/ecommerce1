@extends('frontend.layouts.content')
@section('content')
<section id="showcase">
  <div class="container">
    <div class="row">
      <div class="col">
        <div id="productShowcase" class="carousel slide carousel-fade carousel-showcase" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#productShowcase" data-slide-to="1" class="active"></li>
            <li data-target="#productShowcase" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-item-showcase active">
              <img src="{{ asset('frontend/dist/images/10.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item carousel-item-showcase">
              <img src="{{ asset('frontend/dist/images/11.jpg') }}" class="d-block w-100" alt="">
            </div>
          </div>
          <a class="carousel-control-prev" href="#productShowcase" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#productShowcase" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="row mb-5">
          <div class="col-md-12">
            <a href="#" class="btn btn-outline-primary btn-sm btn-etc float-right">Lainnya</a>
            <h3 class="product-showcase-title bestseller">Rating tertinggi</h3>
            <div class="row mt-4">
              <div class="col-md-12">
                <div id="myCarousel" class="carousel product-carousel slide" data-ride="carousel" data-interval="0">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                    <div class="item carousel-item active">
                      <div class="row">
                        {{--  @foreach ($rates as $item)
                            
                        @endforeach  --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/galaxy.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Samsung S8</h4>
                              <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item carousel-item">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple Watch</h4>
                              <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="thumb-wrapper">
                              <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                              <div class="img-box">
                                <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                              </div>
                              <div class="thumb-content">
                                <h4>Apple Watch</h4>
                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- Carousel controls -->
                  <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                  <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
              <a href="#" class="btn btn-outline-primary btn-sm btn-etc float-right">Lainnya</a>
              <h3 class="product-showcase-title bestseller">Harga Paling rendah</h3>
              <div class="row mt-4">
                <div class="col-md-12">
                  <div id="myCarousel" class="carousel product-carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                      <div class="item carousel-item active">
                        <div class="row">
                          {{--  @foreach ($cheapest as $item)
                              
                          @endforeach  --}}
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="thumb-wrapper">
                              <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                              <div class="img-box">
                                <img src="{{ asset('frontend/dist/images/products/galaxy.jpg') }}" class="img-responsive img-fluid" alt="">
                              </div>
                              <div class="thumb-content">
                                <h4>Samsung S8</h4>
                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item carousel-item">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="thumb-wrapper">
                              <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                              <div class="img-box">
                                <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                              </div>
                              <div class="thumb-content">
                                <h4>Apple Watch</h4>
                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item carousel-item">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                              <div class="thumb-wrapper">
                                <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                                <div class="img-box">
                                  <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                  <h4>Apple Watch</h4>
                                  <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                  <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                      <i class="fas fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                      <i class="fas fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                 <div class="row mb-5">
            <div class="col-md-12">
              <a href="#" class="btn btn-outline-primary btn-sm btn-etc float-right">Lainnya</a>
              <h3 class="product-showcase-title bestseller">Produk Terbaru</h3>
              <div class="row mt-4">
                <div class="col-md-12">
                  <div id="myCarousel" class="carousel product-carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                      <div class="item carousel-item active">
                        <div class="row">
                          @foreach ($newest as $item)
                              
                          @endforeach
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="thumb-wrapper">
                              <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                              <div class="img-box">
                                <img src="{{ asset('frontend/dist/images/products/galaxy.jpg') }}" class="img-responsive img-fluid" alt="">
                              </div>
                              <div class="thumb-content">
                                <h4>Samsung S8</h4>
                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item carousel-item">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="thumb-wrapper">
                              <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                              <div class="img-box">
                                <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                              </div>
                              <div class="thumb-content">
                                <h4>Apple Watch</h4>
                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item carousel-item">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                              <div class="thumb-wrapper">
                                <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                                <div class="img-box">
                                  <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                  <h4>Apple Watch</h4>
                                  <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                  <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                      <i class="fas fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                      <i class="fas fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                 <div class="row mb-5">
            <div class="col-md-12">
              <a href="#" class="btn btn-outline-primary btn-sm btn-etc float-right">Lainnya</a>
              <h3 class="product-showcase-title bestseller">Produk Terlaris</h3>
              <div class="row mt-4">
                <div class="col-md-12">
                  <div id="myCarousel" class="carousel product-carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                      <div class="item carousel-item active">
                        <div class="row">
                          {{--  @foreach ($favorite as $item)
                              
                          @endforeach  --}}
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="thumb-wrapper">
                              <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                              <div class="img-box">
                                <img src="{{ asset('frontend/dist/images/products/galaxy.jpg') }}" class="img-responsive img-fluid" alt="">
                              </div>
                              <div class="thumb-content">
                                <h4>Samsung S8</h4>
                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item carousel-item">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            <div class="thumb-wrapper">
                              <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                              <div class="img-box">
                                <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                              </div>
                              <div class="thumb-content">
                                <h4>Apple Watch</h4>
                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item carousel-item">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                              <div class="thumb-wrapper">
                                <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                                <div class="img-box">
                                  <img src="{{ asset('frontend/dist/images/products/watch.jpg') }}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                  <h4>Apple Watch</h4>
                                  <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                  <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                      <i class="fas fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                      <i class="fas fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection