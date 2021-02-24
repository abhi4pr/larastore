@include('header')

<meta name="csrf-token" content="{{ csrf_token() }}">

<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">cart</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title mb-30 pb-25 text-capitalize">Your cart items</h3>
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
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">Image</th>
                                <th class="text-center" scope="col">Name</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">Quantity</th>
                                <th class="text-center" scope="col">Total price</th>
                                <th class="text-center" scope="col"><a href="#" class="badge-danger badge" onclick="return confirm('Are you want to clear ?');"><i class="fas fa-trash-alt"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $grand_total = 0; ?>
                          @foreach($getcdata as $sabji)
                            <tr> 
                              <td class="text-center">{{$sabji->id}}</td> 
                              <td class="text-center">{{$sabji->pname}}</td> 
                              <td class="text-center"><img src="{{ URL::asset('pgllimages') }}/{{$sabji->pimage}}" style="height:100px; width:100px;"></td> 
                              <td class="text-center"><input type="text" class="pprice" value="{{$sabji->pprice}}" readonly=""></td> 
                              <td class="text-center"><input type="number" min="1" max="10" step="1" class="form-control itemQty" value="{{$sabji->qty}}" style="width:100px;"></td>               
                              <td class="text-center">{{$sabji->total_price}}</td>                               
                              <td class="text-center"><a href="/remove_single_cart/{{$sabji->id}}"><i class="fas fa-trash-alt"></i></a></td>

                              <input type="hidden" class="cid" value="{{$sabji->id}}">
                            <?php $grand_total = $grand_total + $sabji->total_price; ?>  
                            </tr>  
                          @endforeach                                                             
                        </tbody>
                    </table>                    
                </div>
                <div class="row final" style="margin-top:35px; margin-left:15px;">
                     <div class="col-md-3">
                         <a href="/shop" class="btn btn-success"><i class="fas fa-cart-plus"></i> Continue shopping</a>
                     </div>
                     <div class="col-md-3">
                         <b>Grand Total</b>
                     </div>
                     <div class="col-md-3">
                         <b> {{ $grand_total }} </b>
                     </div>
                     <div class="col-md-3">
                        <a href="/checkout" class="btn btn-info"><i class=" far fa-credit-card"> Checkout</i></a> 
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
@include('footer')

<script type="text/javascript">

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(document).ready(function() {
    $(".itemQty").on("change", function() {
      var hide = $(this).closest("tr");

      var id = hide.find(".cid").val();
      var price = hide.find(".pprice").val();
      var pqty = hide.find(".itemQty").val();
  
      $.ajax({
        url: '/update_cart_item',
        method: 'post',
        cache: false,
        data: { itemQty:pqty, cid:id, pprice:price },
        success: function(response) {
          console.log(response);
          location.reload(true);
        }
      });
    });
  });
</script>