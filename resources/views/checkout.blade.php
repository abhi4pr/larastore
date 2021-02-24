@include('header')

<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">check out</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">check out</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->

<section class="check-out-section pt-80 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6" id="order">
                <h4 class="text-center text-info" style="margin-bottom:30px;">Complete Your Order !</h4>
                <div class="jumbotron text-center" style="background-color:#1be1ea; padding:20px;">
                  <?php $grand_total = 0; ?>  
                    @foreach($finald as $enter)
                          <input type="text" name="item_name" value="{{$enter->pname}}">
                          <input type="text" name="amount" value="{{$enter->pprice}}">
                          <input type="text" name="quantity" value="{{$enter->qty}}">
                        <?php $grand_total = $grand_total + $enter->total_price; ?>    
                    @endforeach
                </div>
                <form action="/checkout/submit" method="POST" id="placeOrder">
                    @csrf
                    <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">
                    <div class="form-group topup" style="margin-top:20px;">
                        <input type="text" name="username" placeholder="Username" value="{{Session::get('name')}}" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" value="{{Session::get('email')}}" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="number" placeholder="Number" value="{{Session::get('number')}}" class="form-control" required="">
                    </div>    
                    <div class="form-group">
                        <input type="text" name="address" placeholder="Address" value="{{Session::get('address')}}" class="form-control" required="">
                    </div>
                    <h6 class="text-center">Select Paymode method</h6>
                    <div class="form-group bottomup" style="margin-top:20px;">
                        <select name="pmode" class="form-control">
                            <option value="" selected="" disabled="">Select payment mode</option>
                            <option value="cod">Cash on delivery</option>
                            <option value="netbanking">netbanking</option>
                            <option value="paypal">Paypal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submitcod" value="Place order (COD)" class="btn btn-danger btn-block">
                    </div>
                </form>

                <a href="pay1.php" class="btn btn-success btn-block" style="margin-bottom:20px;">Pay by Payumoney</a>
            
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
@include('footer')

