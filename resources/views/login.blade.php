@if(Session::has('email'))
     <script>window.location = "/my-account";</script>
@endif

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
                    <li class="breadcrumb-item active" aria-current="page">Log in to your account </li>
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
                <h3 class="title text-capitalize mb-30 pb-25"> Log in to your account</h3>
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
                <form class="log-in-form" method="post" action="/login/submit">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" id="staticEmail" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-6">
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="password" name="password" class="form-control" id="inputPassword" required="">
                                <div class="input-group-prepend">
                                    <button type="button"
                                        class="input-group-text  theme-btn--dark1 btn--md show-password">show</button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-group row pb-3 text-center">
                        <div class="col-md-6 offset-md-3">
                            <div class="login-form-links">
                                <a href="/forgetpass" class="for-get">Forgot your password?</a>
                                <div class="sign-btn">
                                    <button type="submit" value="submit" id="submit" class="btn theme-btn--dark1 btn--lg" name="submit">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row text-center mb-0">
                        <div class="col-12">
                            <div class="border-top">
                                <a href="/register" class="no-account">No account? Create one here</a>
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