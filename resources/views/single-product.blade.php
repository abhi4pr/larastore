@include('header')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme3 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/shop">All Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$wpsdata->pname}}</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<?php $final = unserialize($wpsdata->pgallery);?>

    @if(session()->has('failed'))
        <div class="alert alert-danger alert-dismissible">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session()->get('failed') }}
        </div>
    @endif

<section class="product-single theme3 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <span class="badge badge-danger top-right">New</span>
                </div>
                <div class="product-sync-init mb-20">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ URL::asset('pgllimages') }}/{{$wpsdata->pimage}}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ URL::asset('pgllimages') }}/{{$final[0]}};" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ URL::asset('pgllimages') }}/{{$final[1]}}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <img src="{{ URL::asset('pgllimages') }}/{{$final[2]}}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
                </div>

                <div class="product-sync-nav single-product">
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="{{ URL::asset('pgllimages') }}/{{$wpsdata->pimage}}" alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"> <img src="{{ URL::asset('pgllimages') }}/{{$final[0]}}"
                                    ></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="{{ URL::asset('pgllimages') }}/{{$final[1]}}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                        <div class="product-thumb">
                            <a href="javascript:void(0)"><img src="{{ URL::asset('pgllimages') }}/{{$final[2]}}"
                                    alt="product-thumb"></a>
                        </div>
                    </div>
                    <!-- single-product end -->
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
                <div class="single-product-info">
                    <div class="single-product-head">
                        <h2 class="title mb-20">{{$wpsdata->pname}}</h2>
                        <div class="star-content mb-20">
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span> Read reviews <span>(1)</span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i class="far fa-edit"></i></span> Write a review</a>
                        </div>
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">
                            <h6 class="product-price mr-20"><del class="del">Rs.{{$wpsdata->pprice}}</del>
                                <span class="onsale">Rs.{{$wpsdata->pprice}}</span></h6>
                            <span class="badge position-static bg-dark rounded-0">Save 10%</span>
                        </div>
                        <p>{{$wpsdata->pdesc}}.</p>
                        
                    </div>
                    <div class="product-footer">
                        <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                            <div class="count d-flex">
                                <input type="number" min="1" max="10" step="1" value="1">
                                <div class="button-group">
                                    <button class="count-btn increment"><i class="fas fa-chevron-up"></i></button>
                                    <button class="count-btn decrement"><i class="fas fa-chevron-down"></i></button>
                                </div>
                            </div>
                            <div>
                                <form method="POST" action="/addToCart/submit">
                                    @csrf
                                  <input type="hidden" name="pid" value="{{$wpsdata->id}}">  
                                  <input type="hidden" name="pname" value="{{$wpsdata->pname}}">  
                                  <input type="hidden" name="pprice" value="{{$wpsdata->pprice}}">  
                                  <input type="hidden" name="qty" value="1">  
                                  <input type="hidden" name="pimage" value="{{$wpsdata->pimage}}">
                                  <input type="hidden" name="total_price" value="{{$wpsdata->pprice}}">
                                  <button class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">
                                    <span class="mr-2"><i class="ion-android-add"></i></span>
                                    Add to cart
                                  </button>
                                </form>
                            </div>
                        </div>
                        <div class="pro-social-links mt-10">
                            <ul class="d-flex align-items-center">
                                <li class="share">Share</li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-google"></i></a></li>
                                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<div class="product-tab theme3 bg-white pt-60 pb-80">
    <div class="container">
        <div class="product-tab-nav">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav class="product-tab-menu single-product">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="single-product-desc">
                            <p> {{$wpsdata->pdesc}} </p>    
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="single-product-desc">
                            <p>{{$wpsdata->pdesc}}</p>
                        </div>
                    </div>
                    <!-- third tab-pane -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="single-product-desc">
                            <div class="grade-content">
                              @foreach($ratingd as $star)  
                             
                                @for( $x = 0; $x < 5; $x++ )
                                   @if( floatval( $star->rating )-$x >= 1 )
                                    <li style="display:inline;"><i class="fa fa-star"></i></li>
                                   @elseif( $star->rating-$x > 0 )
                                    <li style="display:inline;"><i class="fa fa-star-half"></i></li>
                                   @else
                                    <pre></pre>
                                   @endif
                                @endfor

                                <h6 class="sub-title">{{$star->email}}</h6>
                                <p>{{$star->created_at}}</p>
                                <p>{{$star->review}}</p>
                              @endforeach  
                            </div>
                            <hr class="hr">
                            <div class="grade-content">
                                <div class="contact-form">
                                    <h3 class="title">Leave a Reply</h3>
                                    <form action="/review/submit" method="POST">
                                        @csrf
                                        <input type="hidden" name="pid" value="{{$wpsdata->id}}">
                                        <div class="form-group">
                                            <label for="name">your name</label>                                       
                                            <input type="text" class="form-control" value="{{Session::get('email')}}" readonly="" name="email">                                      
                                        </div>
                                        <div class="form-group">
                                           <div class="rateyo" id="rating"
                                             data-rateyo-rating="4"
                                             data-rateyo-num-stars="5"
                                             data-rateyo-score="3">
                                           </div>
                                           <input type="hidden" name="rating">
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Comment:</label>
                                                <textarea class="form-control mb-30" name="review" required=""></textarea> 
                                        </div>
                                        @if(Session::get('email'))
                                          <input type="submit" name="Sreview" value="Submit review" class="">
                                        @else
                                          <a href="/login" class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">Please login to comment !</a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
<!-- new arrival section start -->
<section class="theme3 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <h2 class="title text-dark text-capitalize">You might also like</h2>
                    <p class="text mt-10">Add Related products to weekly line up
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="product-slider-init slick-nav">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new arrival section end -->

@include('footer')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script type="text/javascript"> 

    $(function () {
      $(".rateyo").rateYo({
        halfStar: true
      });
    });
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>