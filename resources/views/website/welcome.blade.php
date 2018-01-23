@extends('layouts.app')

@section('title')
الصفحة الرئيسية
@endsection

@section('header')

@endsection

@section('content')
    <!-- Featured Posts Grid -->
    <section class="featured-posts-grid bg-dark">
        <div class="container clearfix">

            <!-- Large post slider -->
            <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="/website/img/blog/featured_grid_slide_1.jpg">
                            <img src="/website/img/blog/featured_grid_slide_1.jpg" alt="" class="d-none">
                            <a href="single-post.html" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">الأخبار العاجلة</a>
                            <h2 class="thumb-entry-title">
                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a>
                            </h2>
                        </div>
                    </article>

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="/website/img/blog/featured_grid_slide_2.jpg">
                            <img src="/website/img/blog/featured_grid_slide_2.jpg" alt="" class="d-none">
                            <a href="single-post.html" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--blue">أخبار الكونجرس</a>
                            <h2 class="thumb-entry-title">
                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a>
                            </h2>
                        </div>
                    </article>

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="/website/img/blog/featured_grid_slide_3.jpg">
                            <img src="/website/img/blog/featured_grid_slide_3.jpg" alt="" class="d-none">
                            <a href="single-post.html" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--purple">أخبار الجيش المصري</a>
                            <h2 class="thumb-entry-title">
                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a>
                            </h2>
                        </div>
                    </article>

                </div> <!-- end owl slider -->
            </div> <!-- end large post slider -->


            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url(/website/img/blog/featured_grid_2.jpg);">
                        <a href="single-post.html" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="single-post.html">10 طرق تتبعها داعش لتنفيذ عملياتها الارهابية</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="#">أحمد عادل</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                21 اكتوبر, 2017
                            </li>
                            <li class="entry__meta-comments">
                                <i class="ui-comments"></i>
                                <a href="#">115</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>

            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url(/website/img/blog/featured_grid_3.jpg);">
                        <a href="single-post.html" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="single-post.html">فيديو عن تجربة الصين العسكرية</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="#">أحمد عادل</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                21 اكتوبر, 2017
                            </li>
                            <li class="entry__meta-comments">
                                <i class="ui-comments"></i>
                                <a href="#">115</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>

        </div>
    </section> <!-- end featured posts grid -->

    <div class="main-container container mt-40" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-30">

                <!-- Hot News -->
                <section class="section tab-post mb-10">
                    <div class="title-wrap">
                        <h3 class="section-title">آخر الأخبار</h3>

                        <div class="tabs tab-post__tabs">
                            <ul class="tabs__list">

                                <li class="tabs__item">
                                    <a href="#tab-world" class="tabs__trigger">الفيديوهات</a>
                                </li>

                                <li class="tabs__item">
                                    <a href="#tab-business" class="tabs__trigger">الأنفوجراف</a>
                                </li>

                                <li class="tabs__item">
                                    <a href="#tab-politics" class="tabs__trigger">أخبار عاجلة</a>

                                </li>
                                <li class="tabs__item tabs__item--active">
                                    <a href="#tab-marketing" class="tabs__trigger">الأخبار العسكرية</a>
                                </li>

                            </ul> <!-- end tabs -->
                        </div>
                    </div>

                    <!-- tab content -->
                    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                        <div class="tabs__content-pane" id="tab-world">
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            </div>
                        </div> <!-- end pane 1 -->
                        <div class="tabs__content-pane" id="tab-business">
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            </div>
                        </div> <!-- end pane 2 -->
                        <div class="tabs__content-pane" id="tab-politics">
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            </div>
                        </div> <!-- end pane 3 -->
                        <div class="tabs__content-pane tabs__content-pane--active" id="tab-marketing">
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="single-post.html">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/website/img/blog/grid_post_img_1.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category">أخبار البنتجون</a>
                                                <h2 class="entry__title">
                                                    <a href="single-post.html">تفاصيل تسليح البانتجون الجديد</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="#">أحمد عادل</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        21 اكتوبر, 2017
                                                    </li>
                                                    <li class="entry__meta-comments">
                                                        <i class="ui-comments"></i>
                                                        <a href="#">115</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                                    ...</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            </div>
                        </div> <!-- end pane 4 -->

                    </div> <!-- end tab content -->
                </section> <!-- end hot news -->

                <!-- Ad Banner 728 -->
                <div class="text-center pb-40">
                    <a href="#">
                        <img src="/website/img/blog/placeholder_leaderboard.jpg" alt="">
                    </a>
                </div>

                <!-- Posts from categories -->
                <section class="section mb-0">
                    <div class="row">

                        <!-- World -->
                        <div class="col-md-6 mb-40">
                            <div class="title-wrap bottom-line bottom-line--orange">
                                <h3 class="section-title section-title--sm">الأخبار العاجلة</h3>
                            </div>
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="single-post.html">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="/website/img/blog/grid_post_img_3.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <i class="ui-author"></i>
                                                <a href="#">أحمد عادل</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                21 اكتوبر, 2017
                                            </li>
                                            <li class="entry__meta-comments">
                                                <i class="ui-comments"></i>
                                                <a href="#">115</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</p>
                                    </div>
                                </div>
                            </article>
                            <ul class="post-list-small post-list-small--border-top">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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

                        </div> <!-- end world -->

                        <!-- Science -->
                        <div class="col-md-6 mb-40">
                            <div class="title-wrap bottom-line bottom-line--violet">
                                <h3 class="section-title section-title--sm">الاخبار العسكرية</h3>
                            </div>
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="single-post.html">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="/website/img/blog/grid_post_img_3.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <i class="ui-author"></i>
                                                <a href="#">أحمد عادل</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                21 اكتوبر, 2017
                                            </li>
                                            <li class="entry__meta-comments">
                                                <i class="ui-comments"></i>
                                                <a href="#">115</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</p>
                                    </div>
                                </div>
                            </article>
                            <ul class="post-list-small post-list-small--border-top">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                        </div> <!-- end science -->

                        <!-- Sport -->
                        <div class="col-md-6 mb-40">
                            <div class="title-wrap bottom-line bottom-line--light-blue">
                                <h3 class="section-title section-title--sm">آراء القراء</h3>
                            </div>
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="single-post.html">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="/website/img/blog/grid_post_img_3.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <i class="ui-author"></i>
                                                <a href="#">أحمد عادل</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                21 اكتوبر, 2017
                                            </li>
                                            <li class="entry__meta-comments">
                                                <i class="ui-comments"></i>
                                                <a href="#">115</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</p>
                                    </div>
                                </div>
                            </article>
                            <ul class="post-list-small post-list-small--border-top">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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

                        </div> <!-- end sport -->

                        <!-- Business -->
                        <div class="col-md-6 mb-40">
                            <div class="title-wrap bottom-line bottom-line--blue">
                                <h3 class="section-title section-title--sm">دراسات استراتيجية</h3>
                            </div>
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="single-post.html">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="/website/img/blog/grid_post_img_3.jpg" src="/website/img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <i class="ui-author"></i>
                                                <a href="#">أحمد عادل</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                21 اكتوبر, 2017
                                            </li>
                                            <li class="entry__meta-comments">
                                                <i class="ui-comments"></i>
                                                <a href="#">115</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</p>
                                    </div>
                                </div>
                            </article>
                            <ul class="post-list-small post-list-small--border-top">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى...</a>
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

                        </div> <!-- end business -->

                    </div>
                </section> <!-- end posts from categories -->


            </div> <!-- end posts -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Widget Social Subscribers -->
                <div class="widget widget-social-subscribers">
                    <ul class="widget-social-subscribers__list">
                        <li class="widget-social-subscribers__item">
                            <a href="#" class="widget-social-subscribers__url widget-social-subscribers--facebook">
                                <i class="ui-facebook widget-social-subscribers__icon"></i>
                                <span class="widget-social-subscribers__number">15369</span>
                                <span class="widget-social-subscribers__text">Fans</span>
                            </a>
                        </li>
                        <li class="widget-social-subscribers__item">
                            <a href="#" class="widget-social-subscribers__url widget-social-subscribers--twitter">
                                <i class="ui-twitter widget-social-subscribers__icon"></i>
                                <span class="widget-social-subscribers__number">15369</span>
                                <span class="widget-social-subscribers__text">Followers</span>
                            </a>
                        </li>
                        <li class="widget-social-subscribers__item">
                            <a href="#" class="widget-social-subscribers__url widget-social-subscribers--google">
                                <i class="ui-google widget-social-subscribers__icon"></i>
                                <span class="widget-social-subscribers__number">15369</span>
                                <span class="widget-social-subscribers__text">Followers</span>
                            </a>
                        </li>
                        <li class="widget-social-subscribers__item">
                            <a href="#" class="widget-social-subscribers__url widget-social-subscribers--rss">
                                <i class="ui-rss widget-social-subscribers__icon"></i>
                                <span class="widget-social-subscribers__number">15369</span>
                                <span class="widget-social-subscribers__text">Subscribers</span>
                            </a>
                        </li>
                        <li class="widget-social-subscribers__item">
                            <a href="#" class="widget-social-subscribers__url widget-social-subscribers--youtube">
                                <i class="ui-youtube widget-social-subscribers__icon"></i>
                                <span class="widget-social-subscribers__number">15369</span>
                                <span class="widget-social-subscribers__text">Subscribers</span>
                            </a>
                        </li>
                        <li class="widget-social-subscribers__item">
                            <a href="#" class="widget-social-subscribers__url widget-social-subscribers--instagram">
                                <i class="ui-instagram widget-social-subscribers__icon"></i>
                                <span class="widget-social-subscribers__number">15369</span>
                                <span class="widget-social-subscribers__text">Followers</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Widget Popular/Latest Posts -->
                <div class="widget widget-tabpost">
                    <div class="tabs widget-tabpost__tabs">
                        <ul class="tabs__list widget-tabpost__tabs-list">
                            <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
                                <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">الأكثر قراءة</a>
                            </li>
                            <li class="tabs__item widget-tabpost__tabs-item">
                                <a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">آخر الأخبار</a>
                            </li>
                            <li class="tabs__item widget-tabpost__tabs-item">
                                <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">آخر الفيديوهات</a>
                            </li>
                        </ul> <!-- end tabs -->

                        <!-- tab content -->
                        <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">

                            <div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
                                <ul class="post-list-small">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-75">
                                                    <a href="single-post.html">
                                                        <img data-src="/website/img/blog/popular_post_1.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_2.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_3.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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

                            <div class="tabs__content-pane" id="tab-latest">
                                <ul class="post-list-small">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-75">
                                                    <a href="single-post.html">
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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

                            <div class="tabs__content-pane" id="tab-comments">
                                <ul class="post-list-small">
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-75">
                                                    <a href="single-post.html">
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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
                                                        <img data-src="/website/img/blog/popular_post_4.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
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

                        </div> <!-- end tab content -->
                    </div> <!-- end tabs -->
                </div> <!-- end widget popular/latest posts -->

                <!-- Widget Ad 300 -->
                <div class="widget widget_media_image">
                    <a href="#">
                        <img src="/website/img/blog/placeholder_300.jpg" alt="">
                    </a>
                </div> <!-- end widget ad 300 -->

                <!-- Widget Socials -->
                <div class="widget widget-socials">
                    <h4 class="widget-title">تابعنا على السوشيال ميديا</h4>
                    <div class="socials">
                        <a class="social social-facebook social--large" href="#" title="facebook" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a><!--
              --><a class="social social-twitter social--large" href="#" title="twitter" target="_blank" aria-label="twitter">
                            <i class="ui-twitter"></i>
                        </a><!--
              --><a class="social social-google-plus social--large" href="#" title="google" target="_blank" aria-label="google">
                            <i class="ui-google"></i>
                        </a><!--
              --><a class="social social-instagram social--large" href="#" title="instagram" target="_blank" aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a><!--
              --><a class="social social-youtube social--large" href="#" title="youtube" target="_blank" aria-label="youtube">
                            <i class="ui-youtube"></i>
                        </a><!--
              --><a class="social social-rss social--large" href="#" title="rss" target="_blank" aria-label="rss">
                            <i class="ui-rss"></i>
                        </a>
                    </div>
                </div> <!-- end widget socials -->

                <!-- Widget Ad 125 -->
                <div class="widget widget-gallery-sm">
                    <ul class="widget-gallery-sm__list">
                        <li class="widget-gallery-sm__item">
                            <a href="#"><img src="/website/img/blog/placeholder_125.jpg" alt=""></a>
                        </li>
                        <li class="widget-gallery-sm__item">
                            <a href="#"><img src="/website/img/blog/placeholder_125.jpg" alt=""></a>
                        </li>
                        <li class="widget-gallery-sm__item">
                            <a href="#"><img src="/website/img/blog/placeholder_125.jpg" alt=""></a>
                        </li>
                        <li class="widget-gallery-sm__item">
                            <a href="#"><img src="/website/img/blog/placeholder_125.jpg" alt=""></a>
                        </li>
                    </ul>
                </div> <!-- end widget ad 300 -->

                <!-- Widget Carousel -->
                <div class="widget">
                    <h4 class="widget-title">انفو جراف</h4>
                    <div id="owl-single" class="owl-carousel owl-theme">

                        <article class="entry">
                            <div class="entry__img-holder mb-0">
                                <a href="single-post.html">
                                    <div class="thumb-bg-holder">
                                        <img data-src="/website/img/blog/featured_post_img_1.jpg" src="/website/img/blog/featured_post_img_1.jpg" class="entry__img owl-lazy" alt="">
                                        <div class="bottom-gradient"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title thumb-entry-title--sm">
                                    <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                                </h2>
                            </div>
                        </article>

                        <article class="entry">
                            <div class="entry__img-holder mb-0">
                                <a href="single-post.html">
                                    <div class="thumb-bg-holder">
                                        <img data-src="/website/img/blog/featured_post_img_2.jpg" src="/website/img/blog/featured_post_img_2.jpg" class="entry__img owl-lazy" alt="">
                                        <div class="bottom-gradient"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title thumb-entry-title--sm">
                                    <a href="single-post.html">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
                                </h2>
                            </div>
                        </article>


                    </div>
                </div>

                <!-- Widget Tags -->
                <div class="widget widget_tag_cloud">
                    <h4 class="widget-title">كلامات البحث</h4>
                    <div class="tagcloud">
                        <a href="#">أخبار عسكرية</a>
                        <a href="#">آخر الأخبار</a>
                        <a href="#">أنفوجراف</a>
                        <a href="#">فيديوهات</a>
                        <a href="#">دراسات استراتيجية</a>
                        <a href="#">اخبار عاجلة</a>
                        <a href="#">آراء</a>
                    </div>
                </div>
            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->


@endsection

@section('footer')

@endsection