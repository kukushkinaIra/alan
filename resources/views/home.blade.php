@extends('layout.template')

{{-- my style page --}}
@section('styles')
@stop

{{-- title page --}}
@section('title','home')


@section('content')

    <main class="main-content">
        <!--== Start Hero Area Wrapper ==-->
        <section class="home-slider-area slider-default">
            <div class="home-slider-content">
                <div class="swiper-container home-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Start Slide Item -->
                            <div class="home-slider-item bg-img-cover" data-bg-img="assets/img/slider/1.png">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="content m-auto">
                                                    <div class="inner-content">
                                                        <div class="tittle-wrp">
                                                            <h2>Ice Cream Coop <br>New item</h2>
                                                        </div>
                                                        <div class="btn-wrp">
                                                            <a href="shop.html" class="btn-link">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Start Slide Item -->
                            <div class="home-slider-item bg-img-cover" data-bg-img="assets/img/slider/2.png">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="content m-auto">
                                                    <div class="inner-content">
                                                        <div class="tittle-wrp">
                                                            <h2>Kitchen tool crock <br>Featured Item</h2>
                                                        </div>
                                                        <div class="btn-wrp">
                                                            <a href="shop.html" class="btn-link">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide Item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area latest-product-area" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">Latest product</h2>
                            <p>Our latest item collection of 2021</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper-container product4-slider-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="shop-single-product.html">
                                            <img src="assets/img/shop/1.png" alt="Alan-Shop">
                                            <div class="ribbons">
                                                <span class="ribbon ribbon-hot">Sale</span>
                                                <span class="ribbon ribbon-onsale align-right">-15%</span>
                                            </div>
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="shop-wishlist.html" title="Wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                            <a class="action-cart" href="#/">
                                                <i class="fa fa-opencart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="title"><a href="shop-single-product.html">1. New and sale badge pro...</a></h4>
                                        <div class="prices">
                                            <span class="price">$110.00</span>
                                            <del class="price-old">$130.00</del>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="shop-single-product.html">
                                            <img src="assets/img/shop/2.webp" alt="Alan-Shop">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="shop-wishlist.html" title="Wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                            <a class="action-cart" href="#/">
                                                <i class="fa fa-opencart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="title"><a href="shop-single-product.html">2. New badge product</a></h4>
                                        <div class="prices">
                                            <span class="price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="shop-single-product.html">
                                            <img src="assets/img/shop/3.png" alt="Alan-Shop">
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="shop-wishlist.html" title="Wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                            <a class="action-cart" href="#/">
                                                <i class="fa fa-opencart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="title"><a href="shop-single-product.html">11. Product with video</a></h4>
                                        <div class="prices">
                                            <span class="price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="shop-single-product.html">
                                            <img src="assets/img/shop/4.webp" alt="Alan-Shop">
                                            <div class="ribbons">
                                                <span class="ribbon ribbon-hot">Sale</span>
                                                <span class="ribbon ribbon-onsale align-right">-18%</span>
                                            </div>
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="shop-wishlist.html" title="Wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                            <a class="action-cart" href="#/">
                                                <i class="fa fa-opencart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="title"><a href="shop-single-product.html">3. Variable product</a></h4>
                                        <div class="prices">
                                            <span class="price">$70.00</span>
                                            <del class="price-old">$85.00</del>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="shop-single-product.html">
                                            <img src="assets/img/shop/5.png" alt="Alan-Shop">
                                            <div class="ribbons">
                                                <span class="ribbon-soldout">Soldout</span>
                                            </div>
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="#/" title="Wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                            <a class="action-cart" href="#/">
                                                <i class="fa fa-opencart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="title"><a href="shop-single-product.html">4. Soldout product</a></h4>
                                        <div class="prices">
                                            <span class="price">$19.00</span>
                                            <del class="price-old">$29.00</del>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="shop-single-product.html">
                                            <img src="assets/img/shop/6.png" alt="Alan-Shop">
                                            <span class="ribbon ribbon-hot">Sale</span>
                                            <span class="ribbon ribbon-onsale align-right">-35%</span>
                                        </a>
                                        <div class="product-action">
                                            <a class="action-wishlist" href="shop-wishlist.html" title="Wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                            <a class="action-cart" href="#/">
                                                <i class="fa fa-opencart"></i>
                                            </a>
                                        </div>
                                        <div class="countdown-content">
                                            <ul class="countdown-timer">
                                                <li><span class="days">00</span><p class="days_text">Days</p></li>
                                                <li><span class="hours">00</span><p class="hours_text">Hour</p></li>
                                                <li><span class="minutes">00</span><p class="minutes_text">Mint</p></li>
                                                <li><span class="seconds">00</span><p class="seconds_text">Sec</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="title"><a href="shop-single-product.html">8. Countdown product</a></h4>
                                        <div class="prices">
                                            <span class="price">$39.00</span>
                                            <del class="price-old">$60.00</del>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->



        <!--== Start Featured Product Area Wrapper ==-->
        <section class="product-area featured-product-area" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">Featured Product</h2>
                            <p>Best selling item in our collection</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($cards as $card)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="{{ route('single', ['id' => $card->id]) }}  {{ $card->name }}">
                                        <img src="assets/img/shop/1.png" alt="Alan-Shop">
                                        <div class="ribbons">
                                            <span class="ribbon ribbon-hot">Sale</span>
                                            <span class="ribbon ribbon-onsale align-right">-15%</span>
                                        </div>
                                    </a>
                                    <div class="product-action">
                                        <a class="action-wishlist" href="#" title="Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                        <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                        <a class="action-cart" href="#/">
                                            <i class="fa fa-opencart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="d-flex">
                                        <h4 class="title"><a href="shop-single-product.html">{{ $card->number }}.</a></h4>
                                        <h4 class="title"><a href="shop-single-product.html"> {{ $card->name }}</a></h4>
                                    </div>
                                    <div class="prices">
                                        <span class="price">{{ $card->price }}</span>
                                        <del class="price-old">$130.00</del>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->
                        </div>
                    @endforeach


{{--                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                        <!-- Start Product Item -->--}}
{{--                        <div class="product-item">--}}
{{--                            <div class="product-thumb">--}}
{{--                                <a href="single-product">--}}
{{--                                    <img src="assets/img/shop/8.png" alt="Alan-Shop">--}}
{{--                                    <div class="ribbons">--}}
{{--                                        <span class="ribbon ribbon-hot">Sale</span>--}}
{{--                                        <span class="ribbon ribbon-onsale align-right">-18%</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="action-wishlist" href="shop-wishlist.html" title="Wishlist">--}}
{{--                                        <i class="ion-android-favorite-outline"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-quick-view" href="javascript:void(0);" title="Quick View">--}}
{{--                                        <i class="ion-ios-search-strong"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-cart" href="#/">--}}
{{--                                        <i class="fa fa-opencart"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <h4 class="title"><a href="shop-single-product.html">Product dummy title</a></h4>--}}
{{--                                <div class="prices">--}}
{{--                                    <span class="price">$110.00</span>--}}
{{--                                    <del class="price-old">$130.00</del>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- End Product Item -->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Featured Product Area Wrapper ==-->

        <!--== Start Newsletter Area Wrapper ==-->
        <section class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 m-auto" data-aos="fade-up" data-aos-duration="1000">
                        <div class="section-title text-center">
                            <h2 class="title">Join to our Newsletter</h2>
                            <p>If you never miss our interesting news by joining our newsletter.</p>
                        </div>
                        <form class="input-btn-group">
                            <input class="form-control" type="text" placeholder="Enter your e-mail">
                            <button class="btn btn-theme btn-black" type="button">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Newsletter Area Wrapper ==-->

        <!--== Start Blog Area Wrapper ==-->
        <section class="blog-area blog-default-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 m-auto" data-aos="fade-up" data-aos-duration="1000">
                        <div class="section-title text-center">
                            <h2 class="title">Latest Blog</h2>
                            <p>Follow our blog for collect information</p>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-6">
                        <!--== Start Blog Post Item ==-->
                        <div class="post-item mb-md-150 mb-sm-30">
                            <div class="thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/1.webp" alt="Alan-Blog"></a>
                            </div>
                            <div class="content">
                                <div class="inner-content">
                                    <h4 class="title">
                                        <a href="blog-details.html">There are many variations of passages</a>
                                    </h4>
                                    <div class="meta">
                                        <a class="post-date" href="blog.html">January 26, 2021</a>
                                        <span>/</span>
                                        <a class="post-author" href="blog.html">Demo Alan Admin</a>
                                    </div>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the...</p>
                                    <a class="btn-blog" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--== End Blog Post Item ==-->
                    </div>
                    <div class="col-md-6">
                        <!--== Start Blog Post Item ==-->
                        <div class="post-item mb-md-150 mb-sm-30">
                            <div class="thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/2.webp" alt="Alan-Blog"></a>
                            </div>
                            <div class="content">
                                <div class="inner-content">
                                    <h4 class="title">
                                        <a href="blog-details.html">The standard chunk of lorem ipsum used since</a>
                                    </h4>
                                    <div class="meta">
                                        <a class="post-date" href="blog.html">January 26, 2021</a>
                                        <span>/</span>
                                        <a class="post-author" href="blog.html">Demo Alan Admin</a>
                                    </div>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the...</p>
                                    <a class="btn-blog" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--== End Blog Post Item ==-->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Blog Area Wrapper ==-->
    </main>

@stop

