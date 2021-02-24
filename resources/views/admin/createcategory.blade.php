@include('admin/header')
  
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Create Category</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Create Category</li>
      </ol>
    </section>
    
      <section class="content container-fluid">
      <div class="row">
        
        <div class="col-md-12">
          <div class="">
            <h4>Create Category</h4>
              
              <form method="POST" action="/admin/ccategory/submit" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Category name</label>
                    <input type="text" name="cname" class="form-control" placeholder="Category name" required="">
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