<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول - شبكة الدفاع</title>
    <!-- Bootstrap Core CSS -->
    <link href="/admin/plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/admin/assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/admin/assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <a href="javascript:void(0)" class="text-center db"><img src="/admin/plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                    <br/><img src="/admin/plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" name="email" type="email" required="" placeholder="الايميل">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" name = "password" type="password" required="" placeholder="كلمة السر">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="checkbox-signup"> تذكرني </label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">دخول</button>
                    </div>
                </div>
                <row>
                    <br>
                    <br>
                    <p align="center">جميع الحقوق محفوظة لدى شبكة الدفاع | تصميم وتطوير شركة كود أثريك</p>
                </row>
            </form>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/admin/assets/bootstrap/dist/js/tether.min.js"></script>
<script src="/admin/assets/bootstrap/dist/js/bootstrap.min.js"></script>
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
</body>

</html>

