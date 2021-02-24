@include('admin/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Profile</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Admin Profile</li>
      </ol>
    </section>
    
      <section class="content container-fluid">
      <div class="row">
        
        <div class="col-md-12">
          <div class="chart-box">
            <h4>Admin Profile</h4>
              <form method="POST" action="/admin/profile/submit">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="username" value="{{$pdata->username}}" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" name="password" value="{{$pdata->password}}" placeholder="Password">
                </div>                
                <input type="submit" name="prof_update" value="Update" class="btn btn-default">
              </form>
            
          </div>
        </div>
        
      </div>
    </section>

  </div>
  <!-- content-wrapper --> 
@include('admin/footer')