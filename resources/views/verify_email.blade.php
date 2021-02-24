@include('header')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">login</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Verify Email </li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="my-account pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25"> Verify your email</h3>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('failed') }}
                    </div>
                @endif

                <form class="log-in-form" method="post" action="/verify/email/submit">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-md-3 col-form-label">Enter OTP sent on your email</label>
                        <div class="col-md-6">
                            <input type="hidden" name="encemail" class="form-control" value="{{$data}}" required="">
                            <input type="text" name="otp" class="form-control" id="staticEmail" required="">
                        </div>
                    </div>

                    <div class="form-group row pb-3 text-center">
                        <div class="col-md-6 offset-md-3">
                            <div class="login-form-links">
                                
                                <div class="sign-btn">
                                    <button type="submit" value="submit" id="submit" class="btn theme-btn--dark1 btn--lg" name="submit">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
<!-- footer strat -->
@include('footer')