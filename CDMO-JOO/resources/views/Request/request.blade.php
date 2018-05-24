
 <html> 
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CDMO</title>
  <head>
  <!-- Tell the browser to be responsive to screen width
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

 <!--  <nav class="main-header navbar navbar-expand bg-light navbar-light ">
  -->   <!-- Left navbar links -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Request Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/Users')}}">Home</a></li>
              <li class="breadcrumb-item active">Request</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
        
<div id="container">
       
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
        </br>
        <center><h2>UNIVERSITY OF THE PHILIPPILES</h2></center>
        <center><h2>Cebu COLLEGE</h2></center>
        <center><h4>Lahug, Cebu City</h4></center>

        <center><h1>CDMO REPORT / ACTION / JOB REQUEST SLIP</h1></center>   
        <div class="moroon">
        </div>
<div class="font-color2">      
  <?php
        date_default_timezone_set('Asia/Manila');
          echo "<span style='color:black;font-weight:bold;'>Date: </span>". date('F j, Y g:i:a  ');
  ?> 
</div>

   
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
      </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                   <a class="nav-link btn btn-primary btn-outline-primary btn-lg" href="{{url('/signup')}}" >Home</a>       
                </li>
            </ul>
          </div>
        &nbsp

        <a class="navbar-brand" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp UNIVERSITY CDMO REQUEST FORM </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
                                                                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

      <li class="nav-item active">
          <fieldset disabled> 
              <b><label for="CDMO"><div class="font-color2">Control Number:</div></b>
                    <label for="validationDefault01"><div class="font-color1"></div>
                        <input type="text" class="form-control" id="validationDefault01" placeholder="8000"  required>
          </fieldset>
    </li>
      </nav>

<div class="space">
 
<form>
      <nav class="navbar navbar-expand-lg">
      <b><a class="navbar-brand">List</a></b>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn  btn-outline-primary btn-lg" href="{{url('/signup')}}"><b>Action Slip</b></button>
            <button type="button" class="btn  btn-outline-primary btn-lg" href="{{url('/signup')}}"><b>Report</b></button>
        </div>
</nav>

<div class="form-row">
    <div class="col-md-3 mb-3">
      <b><label for="validationDefault02"><div class="font-color1">Requesting Party</div></label></b>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Subject"  required>
    </div>
    
    <div class="col-md-3 mb-3"> 
      <b><label for="validationDefault02"><div class="font-color1">Recommended by:</div></label></b>
         <label for="validationDefault02"><div class="font-color1">(DIV/ OFC HEAD)</div></label>
       
       <button type="button" class=" btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Department Head
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('/signup')}}">Action</a>
            <a class="dropdown-item" href="{{url('/login1')}}">Another action</a>
              <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{url('/request1')}}">Something else here</a>
            </div>
      </div>
 </div>

  <div class="form-row">
     <div class="col-md-8 mb-3">
        <input type="text" class="form-control" id="validationDefault03" placeholder="AREA / OFFICE / ROOM" required>
     </div>
  </div>


  <div class="form-row">
    <div class="col-md-5 mb-3">
        <b><label for="validationDefault06"><div class="font-color1">Materials Needed</div></label></b>
            <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="col-md-5 mb-3">
        <b><label for="validationDefault06"><div class="font-color1">Materials to purchase</div></label></b>
            <textarea class="form-control" rows="3"></textarea>
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2">
        <div class="font-color">
        Agree to terms and conditions
        </div>  
    </div>
  </div>
</form>

    <div class="btn-design">
      <a type="submit" button class="btn btn-primary btn-lg" href="{{url('/heads1')}}" id="liquidacion_save" name="liquidacion[save]" onclick="$('request1').attr('target', '');"><div class='font-color1'><b>Submit</b></div></a>       
    </div>
</div>

        <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    </div>

      </div><!-- /.container-fluid -->

    </div>






  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/up_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CDMO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <!-- logout User-->
        
             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu btn btn-secondary btn-sm"  role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <center>Logout</center>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>  
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <!-- Dashboard -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/request')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Request Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/InProcessRequest')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>In Process Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/FinishedJob')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List of Approved Request</p>
                </a>
              </li>
            </ul>
          </li>
    <!-- /.sidebar -->
  </aside>


</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html> -->

