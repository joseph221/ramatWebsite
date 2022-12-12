<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <base href="{{ \URL::to('/') }}"> --}}

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('assetss/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assetss/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assetss/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assetss/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assetss/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('assetss/dist/css/skins/_all-skins.min.css') }}">
   <!-- Morris chart -->
   <link rel="stylesheet" href="{{ asset('assetss/bower_components/morris.js/morris.css') }}">
   <!-- jvectormap -->
   <link rel="stylesheet" href="{{ asset('assetss/bower_components/jvectormap/jquery-jvectormap.css') }}">
   <!-- Date Picker -->
   <link rel="stylesheet" href="{{ asset('assetss/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{ asset('assetss/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{ asset('assetss/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assetss/plugins/ijaboCropTool/ijaboCropTool.min.css') }}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    .container {
        display: flex;
        justify-content: center;
        margin-top: 200px;
        background: transparent;
    }



    .modal-content {
        background: transparent;
        border: none;
        padding: 0 19px;
    }

    .modal-header {
        border: none;
    }

    .close {
        position: absolute !important;
        right: 0;
        z-index: 1;
        border: 7px solid lightgray !important;
        width: 5px;
        height: 5px;
        border-radius: 10rem;
        background-color: #ECEFF1 !important;
        opacity: 1;
        top: 50px;
        right: 40px;
    }

    .close>span {
        position: relative;
        right: 10px;
        padding: 0px;
        bottom: 17px;
        font-size: 29px;
        background-color: transparent;
    }

    .modal-body {
        border: none;
        background-color: #ECEFF1;
        border-radius: 8px;
        padding-bottom: 50px;
    }

    .modal-footer {
        border: none;
    }

    .close.focus,
    .close:focus {
        outline: 0;
        box-shadow: none !important;
    }

    .fas {
        color: #faac03;
        margin-bottom: 20px;
    }

    .col-4 {
        padding: 0 15px;
        color: grey;
    }

    .mini-container:hover {
        box-shadow: 0 8px 7px lightgrey;
        color: black;
    }

    /* rating css */

        .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
        }

        .rating > input{ display:none;}

        .rating > label {
        position: relative;
            width: 1em;
            font-size: 4vw;
            color: #FFD600;
            cursor: pointer;
        }
        .rating > label::before{
        content: "\2605";
        position: absolute;
        opacity: 0;
        }
        .rating > label:hover:before,
        .rating > label:hover ~ label:before {
        opacity: 1 !important;
        }

        .rating > input:checked ~ label:before{
        opacity:1;
        }

        .rating:hover > input:checked ~ label:before{ opacity: 0.4; }

        h1{
            margin-top:150px;
        }
        p{ font-size: 1.2rem;}
        @media only screen and (max-width: 600px) {
        h1{font-size: 14px;}
        p{font-size: 12px;}
        }



</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>RA</b>MAT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RAMAT</b>TANZANIA</span>
      <img src="assetss/img/s3.png" alt=""  class="img-fluid">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               {{-- <img src="{{ Auth::user()->picture }}" class="img-circle user-image admin_preview" alt=""> --}}

              {{-- <span class="hidden-xs">{{ Auth::user()->name }}</span> --}}
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 {{-- <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2 admin_preview" alt="User Image"> --}}

                <p>
                    {{-- {{ Auth::user()->name }} --}}
                   <small>Member since Nov. 2012</small> 
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sign out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> 
                                        @csrf
                                    </form>
                  {{-- <a href="#" class="btn btn-default btn-flat">Sign out</a>  --}}
                </div>
              </li>
            </ul>
          </li>


        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <br>
      <div class="user-panel">
        <div class="pull-left image">
          {{-- <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2 admin_preview" alt="User Image"> --}}
        </div>
        <div class="pull-left info">
          {{-- <p style="font-size: 1.5rem">{{ Auth::user()->name }}</p> --}}
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <br>
        <li class="header">MAIN NAVIGATION</li>

        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-cube"></i> <span>Users</span></a></li>
        <li><a href="{{ route('adminnews.index') }}"><i class="fa fa-cubes"></i> <span>News</span></a></li>
        <li><a href="{{ route('adminevent.index') }}"><i class="fa fa-users"></i> <span>Events</span></a></li>
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> All Orders</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Special Orders</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Delivered Orders</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> All Orders</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Special Orders</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Delivered Orders</a></li>
          </ul>
        </li> --}}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">






   <!-- Main content -->
   <section class="content">
    @yield('content')
    <!-- /.row -->
  </section>
  <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">

    </div>
    <strong>Copyright &copy; 2022 <a href="#">Ramat Tanzania</a>.</strong> All rights
    reserved.
  </footer>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->







<!-- jQuery 3 -->
<script src="{{ asset('assetss/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assetss/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assetss/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('assetss/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assetss/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assetss/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('assetss/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assetss/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assetss/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assetss/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assetss/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('assetss/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('assetss/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('assetss/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assetss/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('assetss/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assetss/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assetss/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assetss/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assetss/dist/js/demo.js') }}"></script>
<script src="{{ asset('assetss/plugins/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>

{{-- CUSTOM JS CODES --}}
<script>

    $.ajaxSetup({
       headers:{
         'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
       }
    });



    // $(function(){

    //     $('#AdminInfoForm').on('submit', function(e){
    //     e.preventDefault();

    //     $.ajax({
    //        url:$(this).attr('action'),
    //        method:$(this).attr('method'),
    //        data:new FormData(this),
    //        processData:false,
    //        dataType:'json',
    //        contentType:false,
    //        beforeSend:function(){
    //            $(document).find('span.error-text').text('');
    //        },
    //        success:function(data){
    //             if(data.status == 0){
    //               $.each(data.error, function(prefix, val){
    //                 $('span.'+prefix+'_error').text(val[0]);
    //               });
    //             }else{
    //               $('.admin_name').each(function(){
    //                  $(this).html( $('#AdminInfoForm').find( $('input[name="name"]') ).val() );
    //               });
    //               alert(data.msg);
    //             }
    //        }
    //     });
    // });


    $(document).on('click','#change_picture_btn', function(){
        $('#admin_image').click();
    });


    $('#admin_image').ijaboCropTool({
          preview : '.admin_preview',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
     
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
          },
          onError:function(message, element, status){
            alert(message);
          }
       });


    //   $('#changePasswordAdminForm').on('submit', function(e){
    //        e.preventDefault();

    //        $.ajax({
    //           url:$(this).attr('action'),
    //           method:$(this).attr('method'),
    //           data:new FormData(this),
    //           processData:false,
    //           dataType:'json',
    //           contentType:false,
    //           beforeSend:function(){
    //             $(document).find('span.error-text').text('');
    //           },
    //           success:function(data){
    //             if(data.status == 0){
    //               $.each(data.error, function(prefix, val){
    //                 $('span.'+prefix+'_error').text(val[0]);
    //               });
    //             }else{
    //               $('#changePasswordAdminForm')[0].reset();
    //               alert(data.msg);
    //             }
    //           }
    //        });
    //   });




    // });

</script>

</body>
</html>
