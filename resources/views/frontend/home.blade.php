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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4/5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/ipad.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPad</h4>
                              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/headphone.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Headphone</h4>
                              <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/macbook-air.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Air</h4>
                              <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/nikon.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Nikon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
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
                              <img src="{{ asset('frontend/dist/images/products/play-station.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Play Station</h4>
                              <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/macbook-pro.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Pro</h4>
                              <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/speaker.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Bose Speaker</h4>
                              <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
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
                              <img src="{{ asset('frontend/dist/images/products/iphone.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPhone</h4>
                              <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/canon.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Canon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/pixel.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Google Pixel</h4>
                              <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
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
            <h3 class="product-showcase-title recommend">Rekomendasi</h3>
            <div class="row mt-4">
              <div class="col-md-12">
                <div id="myCarousel2" class="carousel product-carousel slide" data-ride="carousel" data-interval="0">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                    <div class="item carousel-item active">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/ipad.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPad</h4>
                              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/headphone.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Headphone</h4>
                              <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/macbook-air.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Air</h4>
                              <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/nikon.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Nikon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
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
                              <img src="{{ asset('frontend/dist/images/products/play-station.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Play Station</h4>
                              <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/macbook-pro.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Pro</h4>
                              <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/speaker.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Bose Speaker</h4>
                              <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
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
                              <img src="{{ asset('frontend/dist/images/products/iphone.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPhone</h4>
                              <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/canon.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Canon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/pixel.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Google Pixel</h4>
                              <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
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
                  <a class="carousel-control left carousel-control-prev" href="#myCarousel2" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                  <a class="carousel-control right carousel-control-next" href="#myCarousel2" data-slide="next">
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
            <h3 class="product-showcase-title new-arrived">Pendatang Baru</h3>
            <div class="row mt-4">
              <div class="col-md-12">
                <div id="myCarousel3" class="carousel product-carousel slide" data-ride="carousel" data-interval="0">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel3" data-slide-to="1"></li>
                    <li data-target="#myCarousel3" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                    <div class="item carousel-item active">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/ipad.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPad</h4>
                              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/headphone.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Headphone</h4>
                              <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/macbook-air.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Air</h4>
                              <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/nikon.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Nikon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
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
                              <img src="{{ asset('frontend/dist/images/products/play-station.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Sony Play Station</h4>
                              <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/macbook-pro.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Macbook Pro</h4>
                              <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/speaker.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Bose Speaker</h4>
                              <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
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
                              <img src="{{ asset('frontend/dist/images/products/iphone.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Apple iPhone</h4>
                              <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/canon.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Canon DSLR</h4>
                              <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                          <div class="thumb-wrapper">
                            <span class="star-rating"><i class="fas fa-star"></i> 4.5</span>
                            <div class="img-box">
                              <img src="{{ asset('frontend/dist/images/products/pixel.jpg') }}" class="img-responsive img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Google Pixel</h4>
                              <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                              <a href="{{ route('frontend.product.detail') }}" class="btn">Detail</a>
                            </div>
                          </div>
                        </div>
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
                  <a class="carousel-control left carousel-control-prev" href="#myCarousel3" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                  </a>
                  <a class="carousel-control right carousel-control-next" href="#myCarousel3" data-slide="next">
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