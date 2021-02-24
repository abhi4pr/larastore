@include('header')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">blog grid left sidebar</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">blog grid left sidebar</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="blog-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">

                  @foreach($wdata as $nahii)
                    <div class="col-12 col-md-6 col-xl-4 mb-30">
                        <div class="single-blog text-left">
                            <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden" href="/single-blog/{{$nahii->id}}">
                                <img src="data:image/png;base64,{{ $nahii->apic }}" style="height:200px; width:250px;">
                            </a>
                            <div class="blog-post-content">
                                <h5 class="sub-title"> Posted by <a class="blog-link" href="#">Admin</a> <span
                                        class="separator">/</span> {{$nahii->created_at}}</h5>
                                <h3 class="title mb-15"><a href="/single-blog/{{$nahii->id}}">{{$nahii->aname}}</a>
                                </h3>
                                <p class="text">
                                   {{ substr($nahii->adesc,0,100) }}
                                </p>
                                <a class="read-more" href="/single-blog/{{$nahii->id}}">Read More</a>
                            </div>
                        </div>
                    </div>
                  @endforeach
                                        
                </div>
            </div>
            <div class="col-lg-3 mb-30 order-lg-first">
                <aside class="blog-left-sidebar">
                    <div class="sidebar-widget theme1 mb-30">
                        <h3 class="post-title">Search</h3>
                        <div class="blog-search-form">
                            <form action="#" class="position-relative">
                                <input class="form-control rounded" type="text" placeholder="Enter your search key ...">
                                <button class="btn blog-search-btn text-capitalize" type="submit"><i
                                        class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-30">
                        <h3 class="post-title">Categories</h3>
                        <ul class="blog-links">
                            <li><a href="#">Dresses (20)</a></li>
                            <li><a href="#">Jackets &amp; Coats (9)</a></li>
                            <li><a href="#">Sweaters (5)</a></li>
                            <li><a href="#">Jeans (11)</a></li>
                            <li><a href="#">Blouses &amp; Shirts (3)</a></li>
                            <li><a href="#">Electronic Cigarettes (6)</a></li>
                            <li><a href="#">Bags &amp; Cases (4)</a></li>
                        </ul>
                    </div>
                    
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
@include('footer')