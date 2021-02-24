@include('header')

<!-- main slider start -->
<section class="bg-light position-relative">
    <div class="main-slider dots-style theme1">
        <div class="slider-item bg-img bg-img1">
            <div class="container">
                <div class="row align-items-center slider-height">
                    <div class="col-12">
                        <div class="slider-content">
                            <p class="text text-white text-uppercase animated mb-25" data-animation-in="fadeInDown">
                                nike running shoes</p>
                            <h4 class="title text-white animated text-capitalize mb-25" data-animation-in="fadeInLeft"
                                data-delay-in="1">Sport Shoes</h4>
                            <h2 class="sub-title text-white animated" data-animation-in="fadeInRight" data-delay-in="2">
                                Sale 40% Off</h2>
                            <a href="shop-grid-4-column.html"
                                class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-item end -->
        <div class="slider-item bg-img bg-img2">
            <div class="container">
                <div class="row align-items-center slider-height">
                    <div class="col-12">
                        <div class="slider-content">
                            <p class="text text-white text-uppercase animated mb-25" data-animation-in="fadeInLeft">
                                New Arrivals</p>
                            <h4 class="title text-white animated text-capitalize mb-25" data-animation-in="fadeInRight"
                                data-delay-in="1"> Sumer Sale</h4>
                            <h2 class="sub-title text-white animated" data-animation-in="fadeInUp" data-delay-in="2">Up
                                To 70% Off</h2>
                            <a href="shop-grid-4-column.html"
                                class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-item end -->
    </div>
    <!-- slick-progress -->
    <div class="slick-progress">
        <span></span>
    </div>
    <!-- slick-progress end-->
</section>
<!-- main slider end -->
<!-- common banner  start -->
<div class="common-banner pt-80 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30">
                <div class="banner-thumb">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="{{ URL::asset('img/banner/1.jpg') }}" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
                <div class="banner-thumb">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="{{ URL::asset('img/banner/2.jpg') }}" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
                <div class="banner-thumb">
                    <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
                        <img src="{{ URL::asset('img/banner/3.jpg') }}" alt="banner-thumb-naile">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- common banner  end -->
<!-- product tab start -->
<section class="product-tab bg-white pt-50 pb-80">
    <div class="container">
        <div class="product-tab-nav mb-35">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center mb-30">
                        <h2 class="title text-dark text-capitalize">Our products</h2>
                        <p class="text mt-10">Add our products to weekly line up</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
          @foreach($homepro as $kutta)  
            <div class="col-md-3">
                 <div class="product-list">
                    <div class="card product-card">
                        <div class="card-body p-0">
                            <div class="media flex-column">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-right">New</span>
                                    <a href="/single-product/{{$kutta->id}}">
                                        <img class="first-img" src="{{ URL::asset('pgllimages') }}/{{$kutta->pimage}}" alt="thumbnail">
                                    </a>
                                    
                                </div>
                                <div class="media-body">
                                    <div class="product-desc">
                                        <h3 class="title"><a href="/single-product/{{$kutta->id}}">{{$kutta->pname}}</a></h3>
                                        <div class="star-rating">
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star de-selected"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="product-price">Rs.{{$kutta->pprice}}</h6>
                                            <button class="pro-btn" ><i class="icon-basket"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-list End -->
                 </div>
            </div>
          @endforeach  
        </div>
    </div>
</section>
<!-- product tab end -->


<!-- staic media start -->
<section class="static-media-section pb-80 bg-white">
    <div class="container">
        <div class="static-media-wrap theme-bg rounded-5">
            <div class="row">
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="{{ URL::asset('img/icon/2.png') }}"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Free Shipping</h4>
                            <p class="text text-white">On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="{{ URL::asset('img/icon/3.png') }}"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Free Returns</h4>
                            <p class="text text-white">Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="{{ URL::asset('img/icon/4.png') }}"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">100% Payment Secure</h4>
                            <p class="text text-white">Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-3">
                    <div class="d-flex static-media2 flex-column flex-sm-row">
                        <img class="align-self-center mb-2 mb-sm-0 mr-auto  mr-sm-3" src="{{ URL::asset('img/icon/5.png') }}"
                            alt="icon">
                        <div class="media-body">
                            <h4 class="title text-capitalize text-white">Support 24/7</h4>
                            <p class="text text-white">Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- staic media end -->
<!-- blog-section start -->
<section class="blog-section theme1 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">Latest Blogs</h2>
                    <p class="text mt-10">Present posts in a best way to highlight interesting moments of your blog.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
          @foreach($homeblo as $katta)  
            <div class="col-md-3">
                 <div class="product-list">
                    <div class="card product-card">
                        <div class="card-body p-0">
                            <div class="media flex-column">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-right">New</span>
                                    <a href="/single-blog/{{$katta->id}}">
                                        <img class="first-img" src="data:image/png;base64,{{ $katta->apic }}" alt="thumbnail">
                                    </a>
                                    
                                </div>
                                <div class="media-body">
                                    <div class="product-desc">
                                        <h3 class="title"><a href="/single-blog/{{$katta->id}}">{{$katta->aname}}</a></h3>
                                        <div class="star-rating">
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star de-selected"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="sub-title"> Posted by <a class="blog-link theme-color d-inline-block mx-1" href="#">Admin</a>{{$katta->created_at}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-list End -->
                 </div>
            </div>
          @endforeach  
        </div>
    </div>
</section>
<!-- blog-section end -->
<!-- brand slider start -->
<div class="brand-slider-section theme1 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-init border-top py-35 slick-nav-brand">
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="{{ URL::asset('img/brand/1.jpg') }}" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="{{ URL::asset('img/brand/2.jpg') }}" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="{{ URL::asset('img/brand/3.jpg') }}" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="{{ URL::asset('img/brand/4.jpg') }}" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="{{ URL::asset('img/brand/5.jpg') }}" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="{{ URL::asset('img/brand/2.jpg') }}" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-brand">
                            <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                                <img src="{{ URL::asset('img/brand/3.jpg') }}" alt="brand-thumb-nail">
                            </a>
                        </div>
                    </div>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand slider end -->
<!-- footer strat -->
@include('footer')