  
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
     url:'/cart_item_count',
     method:'get',
     data: {cartItem:'cart_item'},
     success: function(response){
      $('#cart-item').html(response);
     }
  });

   $.ajax({    
      url: '/getcategories',             
      method: 'get',
      dataType: "html",                  
      success: function(response){                    
       var arr = JSON.parse(response);
       var len = arr.length;
        for(var i=0; i<len; i++){
          var cdaal = arr[i].cname;
          var tr_str = "<li><a href='/category/cname/"+cdaal+"'>" + cdaal + "</a></li>";
          $(".dyndbmenu").append(tr_str);
        }
      }
  });
