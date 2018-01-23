<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>
        شبكة الدفاع
    |
        @yield('title')
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

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

<body class="bg-light">

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
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">أخبار البانتجون</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Business</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Politics</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Lifestyle</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--purple">Tech</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--yellow">Fashion</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--light-blue">Sport</a>
            </li>
            <li>
                <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--violet">Science</a>
            </li>

            <li>
                <a href="#" class="sidenav__menu-link">Posts</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="single-post-gallery.html" class="sidenav__menu-link">Gallery Post</a></li>
                    <li><a href="single-post.html" class="sidenav__menu-link">Video Post</a></li>
                    <li><a href="single-post.html" class="sidenav__menu-link">Audio Post</a></li>
                    <li><a href="single-post-quote.html" class="sidenav__menu-link">Quote Post</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="sidenav__menu-link">Pages</a>
                <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
                <ul class="sidenav__menu-dropdown">
                    <li><a href="about.html" class="sidenav__menu-link">About</a></li>
                    <li><a href="contact.html" class="sidenav__menu-link">Contact</a></li>
                    <li><a href="search-results.html" class="sidenav__menu-link">Search Results</a></li>
                    <li><a href="categories.html" class="sidenav__menu-link">Categories</a></li>
                    <li><a href="shortcodes.html" class="sidenav__menu-link">Shortcodes</a></li>
                    <li><a href="lazyload.html" class="sidenav__menu-link">Lazyload</a></li>
                    <li><a href="404.html" class="sidenav__menu-link">404</a></li>
                </ul>
            </li>

            <li>
                <a href="about.html" class="sidenav__menu-link">About</a>
            </li>

            <li>
                <a href="contact.html" class="sidenav__menu-link">Contact</a>
            </li>

            <li>
                <a href="#" class="sidenav__menu-link">Advertise</a>
            </li>
        </ul>
    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
            <i class="ui-twitter"></i>
        </a>
        <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
            <i class="ui-google"></i>
        </a>
        <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
            <i class="ui-youtube"></i>
        </a>
        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
            <i class="ui-instagram"></i>
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
                        <img class="logo__img" src="/website/img/logo_mobile.png" srcset="/website/img/logo_mobile.png 1x, /website/img/logo_mobile@2x.png 2x" alt="logo">
                    </a>

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">

                            <li class="active">
                                <a href="index.html">الرئيسية</a>
                            </li>

                            <li class="nav__dropdown">
                                <a href="#">الأقسام</a>
                                <ul class="nav__dropdown-menu">
                                    <li><a href="">قسم رقم 1</a></li>
                                    <li><a href="">قسم رقم 2</a></li>
                                    <li><a href="">قسم رقم 3</a></li>
                                    <li><a href="">قسم رقم 4</a></li>
                                    <li><a href="">قسم رقم 5</a></li>
                                    <li><a href="">قسم رقم 6</a></li>
                                </ul>
                            </li>



                            <li><a href="#"><span>فيديوهات</span></a>
                            </li>

                            <li><a href="#"><span>صور وانفوجراف</span></a>
                            </li>

                            <li><a href="#"><span>عن المجموعة</span></a>

                            </li>

                            <li><a href="#"><span>انضم الينا</span></a></li>
                            <li><a href="#"><span>الشروط والأحكام</span></a></li>

                            <li><a href="#"><span>اتصل بنا</span></a>

                            </li>




                        </ul> <!-- end menu -->
                    </nav> <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right nav--align-right d-lg-flex">

                        <!-- Socials -->
                        <div class="nav__right-item socials nav__socials d-none d-lg-flex">
                            <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-twitter social--nobase" href="#" target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                            </a>
                            <a class="social social-google social--nobase" href="#" target="_blank" aria-label="google">
                                <i class="ui-google"></i>
                            </a>
                            <a class="social social-youtube social--nobase" href="#" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>
                            <a class="social social-instagram social--nobase" href="#" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                            </a>
                        </div>

                        <!-- Search -->
                        <div class="nav__right-item nav__search">
                            <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                <i class="ui-search nav__search-trigger-icon"></i>
                            </a>
                            <div class="nav__search-box" id="nav__search-box">
                                <form class="nav__search-form">
                                    <input type="text" placeholder="Search an article" class="nav__search-input">
                                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                        <i class="ui-search nav__search-icon"></i>
                                    </button>
                                </form>
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
                <!-- Ad Banner 728 -->
                <div class="text-center">
                    <a href="#">
                        <img src="/website/img/blog/placeholder_leaderboard.jpg" alt="">
                    </a>
                </div>

                <!-- Logo -->
                <a href="index.html" class="logo d-none d-lg-block" style="width: 160px">
                   <img class="logo__img" src="/website/img/logo1.png" srcset="/website/img/logo1.png 1x, /website/img/logo@2x.png 2x" alt="logo">
                </a>


                <div class="text-center">
                    <a href="#">
                        <img src="/website/img/blog/placeholder_leaderboard.jpg" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div> <!-- end header -->

    <!-- Trending Now -->
    <div class="trending-now">
        <div class="container relative">
            <span class="trending-now__label">الأخبار العاجلة</span>
            <ul class="newsticker">
                <li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">ذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى </a></li>
                <li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">ذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a></li>
                <li class="newsticker__item"><a href="single-post-3.html" class="newsticker__item-url">ذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a></li>
            </ul>
            <div class="newsticker-buttons">
                <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-right"></i></button>
                <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-left"></i></button>
            </div>
        </div>
    </div>

  @yield('content')

    <!-- Footer -->
    <footer class="footer footer--dark">
        <div class="container">
            <div class="footer__widgets">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
                            <a href="index.html">
                             <img src="/website/img/logo1.png" srcset="/website/img/logo1.png 1x, /website/img/logo_mobile@2x.png 2x" class="logo__img" style="height: 120px" alt="">

                            </a>
                            <p class="mt-20">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h4 class="widget-title">آخر الأخبار</h4>
                        <ul class="post-list-small">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-75">
                                            <a href="single-post.html">
                                                <img data-src="/website/img/blog/popular_post_1.jpg" src="/website/img/empty.png" alt="" class="lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                21 اكتوبر, 2017
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-75">
                                            <a href="single-post.html">
                                                <img data-src="/website/img/blog/popular_post_2.jpg" src="/website/img/empty.png" alt="" class="lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                21 اكتوبر, 2017
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget__newsletter">
                            <h4 class="widget-title">تابعنا</h4>

                            <div class="socials mb-20">
                                <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                            </div>

                            <form class="mc4wp-form" method="post">
                                <div class="mc4wp-form-fields">
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">روابط مهمة</h4>
                            <ul>
                                <li><a href="about.html">عن الموقع</a></li>
                                <li><a href="contact.html">الفيديوهات</a></li>
                                <li><a href="categories.html">الأقسام</a></li>
                                <li><a href="shortcodes.html">الانفوجراف</a></li>
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
                                <li><a href="#">الشروط والاحكام</a></li>
                                <li><a href="#">اتصل بنا</a></li>
                                <li style="padding-right: 10px"><a href="#">انضم الينا</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1 text-md-center">
              <span class="copyright">
                جميع الحقوق محفوظ لموقع شبكة الدفاع | تطوير وتصميم شركة كود أثريك 2017
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
<script src="/website/js/easing.min.js"></script>
<script src="/website/js/owl-carousel.min.js"></script>
<script src="/website/js/jquery.newsTicker.min.js"></script>
<script src="/website/js/modernizr.min.js"></script>
<script src="/website/js/scripts.js"></script>
@yield('footer')
</body>
</html>