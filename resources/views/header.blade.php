<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>Junno – Multipurpose eCommerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}" />


    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/plugins.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.min.css') }}" />


</head>

<body>
    

<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-right">
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-4">
                        <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li><a href="/"><span class="menu-text">Home</span></a>
                    

                </li>
                <li><a href="/shop"><span class="menu-text">Shop</span></a>
                <li><a href="#"><span class="menu-text">Categories</span></a>
                    <ul class="offcanvas-submenu dyndbmenu">
                      
                      
                    </ul>
                </li>   
                <li><a href="/blogs"><span class="menu-text">Blogs</span></a>
                    
                </li>
                <li><a href="/contact-us"><span class="menu-text">Contact us</span></a>
                    
                </li>
                <li><a href="/about-us">About us</a></li>
                <li><a href="/my-account">My account</a></li>
            </ul>
        </nav>
        <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- offcanvas-mobile-menu end -->


<!-- header start -->
<header>
    <!-- header top start -->
    <div class="header-top theme1 bg-dark py-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 order-last order-md-first">
                    <div class="static-info text-center text-md-left">
                        <p class="text-white">Join our showroom and get <span class="theme-color">50 % off</span> !
                            Coupon code : <span class="theme-color">Junno50</span></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <nav class="navbar-top pb-2 pb-md-0 position-relative">
                        <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                            
                            <li class="english">
                                @if(Session::has('email'))
                                <a href="/logout" id="dropdown3" class="pr-0" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ URL::asset('img/logo/us-flag.jpg') }}" alt="us flag"> Logout
                                </a>  
                                @else 
                                <a href="/login" id="dropdown3" class="pr-0" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ URL::asset('img/logo/us-flag.jpg') }}" alt="us flag"> Login
                                </a>   
                                @endif                            
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <div class="header-middle pt-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-2 order-first">
                    <div class="logo text-center text-sm-left mb-30 mb-sm-0">
                        <a href="index.html"><img src="{{ URL::asset('img/logo/logo-dark.jpg') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <!-- search-form end -->
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                        <div class="media static-media mr-50 d-none d-lg-flex">
                            <img class="mr-3 align-self-center" src="{{ URL::asset('img/icon/1.png') }}" alt="icon">
                            <div class="media-body">
                                <div class="phone">
                                    <span class="text-muted">Call us:</span>
                                </div>
                                <div class="phone">
                                    <a href="tel:(+123)4567890" class="text-dark">(+123)4567890</a>
                                </div>
                            </div>
                        </div>
                        <!-- static-media end -->
                        <div class="cart-block-links theme1">
                            <ul class="d-flex">
                               
                                <li class="mr-0 cart-block position-relative">
                                    @if(Session::has('email'))
                                      <a class="tt" href="/cart">
                                        <i class="icon-bag"></i>
                                        <span id="cart-item" class="badge badge-danger"></span>                    
                                      </a>
                                    @else  
                                      <a href="/login"><h6> Please login to see your cart</h6></a>
                                    @endif
                                </li>
                                <!-- cart block end -->
                            </ul>
                        </div>
                        <div class="mobile-menu-toggle theme1 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 order-lg-first">
                    <div class="search-form pt-30 pt-lg-0">
                        <form class="form-inline position-relative" method="POST" action="/searchresult">
                            @csrf
                            <input class="form-control theme1-border" type="text" name="pname" placeholder="Enter your search key ...">
                            <button class="btn search-btn theme-bg btn-rounded" type="submit"><i
                                    class="icon-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->

    <!-- header bottom start -->
    <nav id="sticky" class="header-bottom theme1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 offset-lg-2 d-flex flex-wrap align-items-center position-relative">
                    <ul class="main-menu d-flex">
                        <li class="active ml-0">
                            <a href="/" class="pl-0">Home </a>                         
                        </li>
                        <li class="position-static">
                            <a href="/shop">Shop </a>                            
                        </li>
                        <li>
                            <a href="#">Categories <i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu dyndbmenu">
                               
                            </ul>
                        </li>
                        <li>
                            <a href="/blogs">Blogs </a>                            
                        </li>
                        <li>
                            <a href="/contact-us">Contact us </a>                            
                        </li>
                        <li><a href="/about-us">About us</a></li>
                        <li><a href="/my-account">My account</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!-- header bottom end -->
    
    <!--=======  End of category menu =======-->
</header>
<!-- header end -->
<i class="fa fa-comment" href="#" aria-hidden="true" onclick="openForm()" style="font-size: 60px;
    color: red;
    float: right !important;
    bottom: 0;
    position: fixed;
    z-index: 9999;
    display: inline-block;"></i>

<div class="container" id="myForm" style="display:none;">
 <div class="row justify-content-md-center mb-4">
    <div class="col-md-6">
       <!--start code-->
       <div class="card">
          <div class="card-body messages-box">
             <h5>I am here to help you</h5> <i class="fa fa-window-close fa-2x" aria-hidden="true" onclick="closeForm()" style="float:right; margin-top:-20px;"></i>
             <ul class="list-unstyled messages-list">
                    
            
             </ul>
          </div>
          <div class="card-header">
            <div class="input-group">
               <input id="input-me" required="required" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />
               <span class="input-group-append">
                 <input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
               </span>
            </div> 
          </div>
       </div>
       <!--end code-->
    </div>
 </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<script type="text/javascript">
 function getCurrentTime(){
    var now = new Date();
    var hh = now.getHours();
    var min = now.getMinutes();
    var ampm = (hh>=12)?'PM':'AM';
    hh = hh%12;
    hh = hh?hh:12;
    hh = hh<10?'0'+hh:hh;
    min = min<10?'0'+min:min;
    var time = hh+":"+min+" "+ampm;
    return time;
 }
 function send_msg(){
    //jQuery('.start_chat').hide();
    var txt=jQuery('#input-me').val();
    var html='<li class="messages-me clearfix"><span class="message-img"><img src="{{ URL::asset("img/user_avatar.png") }}" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+txt+'</p></div></li>';
    jQuery('.messages-list').append(html);
    jQuery('#input-me').val('');
    if(txt){
        jQuery.ajax({
            url:'/getmessages',
            type:'post',
            data:'txt='+txt,
            success:function(result){
                var html='<li class="messages-you clearfix"><span class="message-img"><img src="{{ URL::asset("img/bot_avatar.png") }}" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+result+'</p></div></li>';
                jQuery('.messages-list').append(html);
                jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
            }
        });
    }
 }
</script>