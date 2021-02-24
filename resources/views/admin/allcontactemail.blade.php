@include('admin/header')
  
<link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Contact Emails</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Contact Emails</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <h4>All Contact emails</h4>
            <div id="example_filter" class="dataTables_filter pull-right">
              
            </div>
            
            <table id="cforms-listing" class="table table-bordered display">
             <thead>
              <tr>
               <th>Contact ID</th>
               <th>Contact name</th>
               <th>Contact email</th> 
               <th>Contact number</th> 
               <th>Contact message</th> 
               <th>Contact date</th>  
             </tr> 
               </thead> 
               <tbody> 

                @foreach($data as $hint)

                <tr> 
                  <td>{{ $hint->id }}</td> 
                  <td>{{ $hint->customerName }}</td> 
                  <td>{{ $hint->customerEmail }}</td> 
                  <td>{{ $hint->customerNumber }}</td> 
                  <td>{{ $hint->customerMessage }}</td> 
                  <td>{{ $hint->created_at }}</td>   
                </tr> 

                @endforeach
              
              </tbody> 
             </table> 

          </div>
        </div>
        
      </div>
    </section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 

  <script type="text/javascript">
  $(document).ready(function(){
    $('#cforms-listing').DataTable();
  });
  </script>  

  <!-- Main Footer -->
<footer class="main-footer">
    <div class="pull-right hidden-xs"> Version 1.0</div>
    Copyright &copy; 2017 Yourdomian. All rights reserved. 
</footer>
</div>
<!-- wrapper --> 

<script src="{{ URL::asset('admin/bootstrap/js/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('admin/js/ovio.js') }}"></script> 

</body>
</html>