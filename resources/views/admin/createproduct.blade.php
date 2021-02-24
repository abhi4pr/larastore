@include('admin/header')
  
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Create Product</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Create Product</li>
      </ol>
    </section>
    
      <section class="content container-fluid">
      <div class="row">
        
        <div class="col-md-12">
          <div class="">
            <h4>Create Product</h4>
              
              <form method="POST" action="/admin/cproduct/submit" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Product name</label>
                    <input type="text" name="pname" class="form-control" placeholder="product name">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Product Description</label>
                    <textarea class="form-control" name="pdesc" id="adesc" rows="3" placeholder="Description"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Category</label>
                    <select class="form-control" id="category" name="cname">
                      @foreach($slcat as $daal)
                        <option value="{{$daal->cname}}">{{$daal->cname}}</option>
                      @endforeach  
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Product Price</label>
                    <input type="text" class="form-control" name="pprice" rows="3" placeholder="Price">
                  </div>
                </div>
                <div class="col-md-12">
                  <h6>Product image</h6>
                  <div class="form-group has-feedback">
                    <label class="custom-file center-block block">
                      <input id="file" class="custom-file-input" name="pimage" type="file">
                      <span class="custom-file-control"></span> </label>
                  </div>
                </div>
                <div class="col-md-12">
                  <h6>Product galery images</h6>
                  <div class="form-group has-feedback">
                    <label class="custom-file center-block block">
                      <input id="file1" class="custom-file-input" name="pgallery[]" multiple="" type="file">
                      <span class="custom-file-control"></span> </label>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="submit" name="acreate" class="btn btn-default">
                </div>
              </form> 

          </div>
        </div>
        
      </div>
    </section>

  </div>
  <!-- content-wrapper --> 
@include('admin/footer')
