@include('admin/header')
  
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Create Article</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Create Article</li>
      </ol>
    </section>
    
      <section class="content container-fluid">
      <div class="row">
        
        <div class="col-md-12">
          <div class="">
            <h4>Create Article</h4>
              
              <form method="POST" action="/admin/carticles/submit" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Article name</label>
                    <input type="text" name="aname" class="form-control" placeholder="Article name">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Description</label>
                    <textarea class="form-control" name="adesc" id="adesc" rows="3" placeholder="Description"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="custom-file center-block block">
                      <input id="file" class="custom-file-input" name="apic" type="file">
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

<script>
  CKEDITOR.replace( 'adesc' );
</script>