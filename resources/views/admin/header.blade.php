<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Ovio -  Bootstrap Based Responsive Dashboard &amp; Admin Template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Template style -->
<link rel="stylesheet" href="{{ URL::asset('admin/css/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/font-awesome/css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('admin/weather/weather-icons.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('admin/weather/weather-icons-wind.min.css') }}">

<script src="plugins/charts/code/highcharts.js"></script>
</head>

<body class="sidebar-mini">
<div class="wrapper"> 
  
  <!-- Main Header -->
  <header class="main-header"> 
    
    <!-- Logo --> 
    <a href="index.html" class="logo"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="{{ URL::asset('admin/img/logo.png') }}" alt="Ovio"></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="{{ URL::asset('admin/img/logo-lg.png') }}" alt="Ovio"></span> </a> 
    
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation"> 
      <!-- Sidebar toggle button--> 
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
      <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form>
        <!-- search form --> </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-envelope"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
              </li>
              <li class="footer"><a href="#">Check all notifications</a></li>
            </ul>
          </li>
          <!-- messages-menu --> 
          
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-megaphone"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu --> 
          <!-- User Account Menu -->
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ URL::asset('admin/img/img1.jpg') }}" class="user-image" alt="User Image"> <span class="hidden-xs">{{Session::get('username')}}</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{ URL::asset('admin/img/img1.jpg') }}" class="img-responsive" alt="User"></div>
                <p class="text-left">{{Session::get('username')}} <small>{{Session::get('username')}}</small> </p>
                <div class="view-link text-left"><a href="/admin/profile">View Profile</a> </div>
              </li>
              <li><a href="/admin/profile"><i class="icon-profile-male"></i> My Profile</a></li>
              
              <li role="separator" class="divider"></li>
              <li><a href="/admin/logout"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image"> <img src="{{ URL::asset('admin/img/img1.jpg') }}" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>Florence Douglas</p>
          <a href="#"><i class="fa fa-circle"></i> Online</a> </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li> <a href="/admin/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a> </li>
        <li> <a href="/admin/customers"><i class="fa fa-th"></i> <span>All Customers</span> </a> </li>
        <li> <a href="/admin/createproduct"><i class="fa fa-dashboard"></i> <span>Create product</span> </a> </li>
        <li> <a href="/admin/allproducts"><i class="fa fa-th"></i> <span>All Products</span> </a> </li>
        <li> <a href="/admin/allorders"><i class="fa fa-th"></i> <span>All Orders</span> </a> </li>        
        <li> <a href="/admin/createcategory"><i class="fa fa-dashboard"></i> <span>Create Category</span> </a> </li>        
        <li> <a href="/admin/allcategories"> <i class="fa fa-th"></i> <span>All Categories</span></a> </li>
        <li> <a href="/admin/contacts"> <i class="fa fa-th"></i> <span>All Contact emails</span></a> </li>
        <li> <a href="/admin/allarticles"><i class="fa fa-th"></i> <span>All Blogs</span> </a> </li>
        <li> <a href="/admin/createarticle"><i class="fa fa-dashboard"></i><span>Create Blog</span></li>
      </ul>
      <!-- sidebar-menu --> 
    </section>
  </aside>