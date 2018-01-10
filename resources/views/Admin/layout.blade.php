<!DOCTYPE html>
<html lang="ar" dir="rtl">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="16x16" href="/admin/plugins/images/favicon.png">
  <title>
    لوحة تحكم المديرين |
  @yield('title')
  </title>
  <!-- Bootstrap Core CSS -->
  <link href="/admin/plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css" rel="stylesheet">

  <!-- Menu CSS -->
  <link href="/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
  <!-- animation CSS -->
  <link href="/admin/assets/css/animate.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="/admin/assets/css/style.css" rel="stylesheet">
  <!-- color CSS -->
  <link href="/admin/assets/css/colors/blue-dark.css" id="theme" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    @yield('header')
</head>

<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Top Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="index.html"><b><!--This is dark logo icon--><img src="/admin/plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/admin/plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="/admin/plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="/admin/plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
      </ul>
        <h3 style="color: white; text-align: center;">لوحة تحكم الإداريين بالموقع</h3>

        </li>
        <!-- /.dropdown -->


      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
  <!-- End Top Navigation -->
  <!-- Left navbar-header -->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
      <div class="user-profile">
        <div class="dropdown user-pro-body">
          <div><img src="{{Auth::user()->profile_img}}" alt="user-img" class="img-circle"></div>
          <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span> {{\Illuminate\Support\Facades\Auth::user()->name}} </a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>
      </div>

      <ul class="nav" id="side-menu">
          @include('Admin.nav');
      </ul>

    </div>
  </div>
  <!-- Left navbar-header end -->
  <!-- Page Content -->
  <div id="page-wrapper">
  @yield('content')
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Powered By <a href="codeasterisk.com">CodeAsterisk Co</a></footer>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/admin/bootstrap/dist/js/tether.min.js"></script>
<script src="/admin/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/admin/plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="/admin/assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/admin/assets/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/admin/assets/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
@yield('footer')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')

</body>

</html>
