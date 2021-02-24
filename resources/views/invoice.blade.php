            
    <!-- My Account Tab Menu Start -->
    <div class="col-lg-3 col-12 mb-30">
        <div class="myaccount-tab-menu nav" role="tablist">
                        
        </div>
    </div>
    <!-- My Account Tab Menu End -->

    <!-- My Account Tab Content Start -->
    <div class="col-lg-9 col-12 mb-30">
        <div class="tab-content" id="myaccountContent">
            
            <!-- Single Tab Content Start -->
            <div class="tab-pane fade active show" id="orders" role="tabpanel">
                <div class="myaccount-content">
                    <h3>Order Details</h3>

                    <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Pay Mode</th>
                                    <th>Order On</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                               @foreach($ordrdtl as $print)
                                 <tr> 
                                  <td>{{ $print->order_id }}</td> 
                                    
                                      <td>{{$print->product_id}}</td>
                                    
                                  <td>{{ $print->qty }}</td>
                                  <td>{{ $print->price*$print->qty }}</td>
                                  <td>{{ $print->pmode }}</td>
                                  <td>{{ $print->order_on }}</td>
                                  
                                 </tr> 
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Single Tab Content End -->

        </div>
    </div>
    <!-- My Account Tab Content End -->
        