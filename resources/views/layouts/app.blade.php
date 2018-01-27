<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>
       {{getsetting('SiteName')}}
    |
        @yield('title')
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @yield('meta')
    <!-- Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="/website/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/website/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" href="/website/css/font-icons.css" />
    <link rel="stylesheet" href="/website/css/style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="/website/img/favicon.ico">
    <link rel="apple-touch-icon" href="/website/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/website/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/website/img/apple-touch-icon-114x114.png">

    <!-- Lazyload -->
    <script src="/website/js/lazysizes.min.js"></script>
    @yield('header')
</head>

<body class="bg-light" id="app">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
    <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">
            <!-- Categories -->
            @foreach(\App\Category::all()  as $category)
            <li>
                <a href="{{ route('category', ['category' => $category->slug])}}" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">{{ $category->title }}</a>
            </li>
            @endforeach
        </ul>
    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="{{getsetting('facebook')}}" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="{{getsetting('twitter')}}"  target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        <a class="social social-youtube"  href="{{getsetting('youtube')}}" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
    </div>
</header> <!-- end sidenav -->

<main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">

                    <!-- Mobile logo -->
                    <a href="index.html" class="logo logo--mobile d-lg-none">
                        <img class="logo__img" src="/website/img/logo1.png" style="width: 30px;" srcset="/website/img/logo1.png 1x, /website/img/logo1.png 2x" alt="logo">
                    </a>

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">

                            <li class="active">
                                <a href="{{ url('/') }}">الرئيسية</a>
                            </li>

                            <li class="nav__dropdown">
                                <a href="#">الأخبار</a>
                                <ul class="nav__dropdown-menu">
                                    @foreach(\App\Category::where(['type' => 'news'])->get()  as $category)
                                    <li><a href="{{ route('category', ['category' => $category->slug])}}">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav__dropdown">
                                <a href="#">فيديوهات</a>
                                <ul class="nav__dropdown-menu">
                                    @foreach(\App\Category::where(['type' => 'video'])->get()  as $category)
                                        <li><a href="{{ route('category', ['category' => $category->slug])}}">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav__dropdown">
                                <a href="#">صور وانفوجراف</a>
                                <ul class="nav__dropdown-menu">
                                    @foreach(\App\Category::where(['type' => 'infographic'])->get()  as $category)
                                        <li><a href="{{ route('category', ['category' => $category->slug])}}">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            </li>

                            <li><a href="{{ route('join-us') }}"><span>انضم الينا</span></a></li>
                            <li><a href="{{ route('contact-us') }}"><span>اتصل بنا</span></a> </li>




                        </ul> <!-- end menu -->
                    </nav> <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right nav--align-right d-lg-flex">

                        <!-- Socials -->
                        <div class="nav__right-item socials nav__socials d-none d-lg-flex">
                            <li><a href="{{ route('write') }}" style="color:white; padding: 5px; border-radius: 5px" class=" btn-color"><span>شاركنا بمقالك</span></a></li>

                            <a class="social social-facebook social--nobase" href="{{getsetting('facebook')}}"  target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-twitter social--nobase" href="{{getsetting('twitter')}}"  target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                            </a>

                            <a class="social social-youtube social--nobase" href="{{getsetting('youtube')}}"  target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>

                        </div>

                        <!-- Search -->
                        <div class="nav__right-item nav__search">
                            <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                <i class="ui-search nav__search-trigger-icon"></i>
                            </a>
                            <div class="nav__search-box" id="nav__search-box" style="right:auto;left: 0;">
                                <div class="nav__search-form">
                                    <input type="text" placeholder="إبحث عن مقال" class="nav__search-input" id="search">
                                    <button onclick="search()" class="search-button btn btn-lg btn-color btn-button" style="right:auto;left: 0;">
                                        <i class="ui-search nav__search-icon"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end nav right -->

                    <!-- Side Menu Button -->
                    <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
                    </button> <!-- end Side menu button -->

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->

    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="flex-parent align-items-center">
                <!-- Logo -->
                <a href="index.html" class="logo d-none d-lg-block" style="width: 160px">
                   <img class="logo__img" src="/website/img/logo1.png" srcset="/website/img/logo1.png 1x, /website/img/logo1.png 2x" alt="logo">
                </a>


                <div class="text-center">
                    <a href="#">
                        <img src="/website/img/blog/placeholder_leaderboard.jpg" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div> <!-- end header -->

    @if($news = \App\Category::where(['title' => 'الأخبار العاجلة'])->first()->news)
    <!-- Trending Now -->
    <div class="trending-now">
        <div class="container relative">
            <span class="trending-now__label">الأخبار العاجلة</span>
            <ul class="newsticker">
                @foreach($news as $new)
                <li class="newsticker__item"><a href="{{ route('news-post', ['category' => $new->category->slug, 'slug' => $new->slug]) }}" class="newsticker__item-url">{{ $new->title }} </a></li>
                @endforeach
            </ul>
            <div class="newsticker-buttons">
                <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-right"></i></button>
                <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-left"></i></button>
            </div>
        </div>
    </div>
    @endif
  @yield('content')

    <!-- Footer -->
    <footer class="footer footer--dark">
        <div class="container">
            <div class="footer__widgets">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
                            <a href="{{ url('/') }}">
                             <img src="/website/img/logo1.png" srcset="/website/img/logo1.png 1x, /website/img/logo1.png 2x" class="logo__img" style="height: 120px" alt="">

                            </a>
                            <p class="mt-20">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">الأخبار</h4>
                            <ul>
                                @foreach(\App\Category::where(['type' => 'news'])->get()  as $category)
                                    <li><a href="{{ route('category', ['category' => $category->slug])}}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">الإنفوجراف</h4>
                            <ul>
                                @foreach(\App\Category::where(['type' => 'infographic'])->get()  as $category)
                                    <li><a href="{{ route('category', ['category' => $category->slug])}}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">الفديوهات</h4>
                            <ul>
                                @foreach(\App\Category::where(['type' => 'video'])->get()  as $category)
                                    <li><a href="{{ route('category', ['category' => $category->slug])}}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->

        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 order-lg-2 text-right text-md-center">
                        <div class="widget widget_nav_menu">
                            <ul>
                                <li><a href="{{ route('contact-us') }}">اتصل بنا</a></li>
                                <li style="padding-right: 10px"><a href="{{ route('join-us') }}">انضم الينا</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1 text-md-center">
              <span class="copyright">
                جميع الحقوق محفوظ لموقع شبكة الدفاع | تطوير وتصميم شركة كود أستريسك 2017
              </span>
                    </div>
                </div>

            </div>
        </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<script src="/website/js/jquery.min.js"></script>
<script src="/website/js/bootstrap.min.js"></script>
{{--<script src="/website/js/easing.min.js"></script>--}}
<script src="/website/js/owl-carousel.min.js"></script>
<script src="/website/js/jquery.newsTicker.min.js"></script>
<script src="/website/js/modernizr.min.js"></script>
<script src="/website/js/scripts.js"></script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<script>function search() { window.location.href = "{{ route('search', ['word' => '']) }}/" + $('#search').val(); }</script>

@yield('footer')
</body>
</html>