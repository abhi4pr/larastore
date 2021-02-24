@if(Session::has('username'))
     <script>window.location = "/admin/home";</script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin Login</h2>
  @if(session()->has('failed'))
      <div class="alert alert-danger alert-dismissible">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session()->get('failed') }}
      </div>
  @endif
  <form class="form-horizontal" action="/admin/login/submit" method="POST">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required="">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="login" value="Submit" class="btn btn-default">
      </div>
    </div>
  </form>
</div>

</body>
</html>

