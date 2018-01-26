@extends('layouts.app')

@section('title')
الصفحة الرئيسية
@endsection

@section('header')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection

@section('content')
    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-8 blog__content mb-30">

                <!-- Breadcrumbs -->
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="{{url('/')}}" class="breadcrumbs__url"><i class="ui-home"></i></a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a class="breadcrumbs__url">الأخبار</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        <a href="/{{ $post->category->slug }}" class="breadcrumbs__url">{{ $post->category->title }}</a>
                    </li>
                </ul>

                <!-- standard post -->
                <article class="entry">

                    <div class="single-post__entry-header entry__header">
                        <h1 class="single-post__entry-title">
                            {{ $post->title }}
                        </h1>

                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a>{{ $post->writer }}</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{ !$post->created_at->setLocale('ar') }}
                                {{ $post->created_at->diffforhumans() }}
                            </li>
                        </ul>
                    </div>

                    <div class="entry__img-holder">
                        <img data-src="/photos/{{$post->img}}" src="/website/img/blog/single_post_featured_img.jpg" alt="" class="entry__img lazyload">
                    </div>

                    <!-- Share -->
                    <div class="entry__share">
                        <div class="socials entry__share-socials">
                            <a href="#" class="social social-facebook entry__share-social social--wide social--medium">
                                <i class="ui-facebook"></i>
                                <span class="social__text">Share on Facebook</span>
                            </a>
                            <a href="#" style="margin:5px;" class="social social-twitter entry__share-social social--wide social--medium">
                                <i class="ui-twitter"></i>
                                <span class="social__text">Share on Twitter</span>
                            </a>
                        </div>
                    </div> <!-- share -->

                    <div class="entry__article">
                        {!! $post->subject !!}
                        <!-- tags -->
                        <div class="entry__tags">
                            <span class="entry__tags-label">الكلمات الدلالية:</span>
                            @foreach(explode(" ", $post->description) as $word)
                                <a href="{{ route('search', ['word' => $word]) }}" rel="tag">{{ $word }}</a>
                            @endforeach
                        </div> <!-- end tags -->

                    </div> <!-- end entry article -->

                    <!-- Comments -->
                    <div class="entry-comments mt-30">
                        <div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
                    </div> <!-- end comments -->

                    <!-- Related Posts -->
                    <div class="related-posts">
                        <div class="title-wrap mt-40">
                            <h5 class="uppercase">مقالات متعلقة</h5>
                        </div>
                        <div class="row row-20">
                            @foreach($related as $post)
                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="{{ route('news-post', ['category' => $post->category->slug, 'news' => $post->slug]) }}">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="/photos/{{ $post->img }}" src="/website/img/empty.png" class="entry__img lazyload" alt="">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title entry__title--sm">
                                                <a href="{{ route('news-post', ['category' => $post->category->slug, 'news' => $post->slug]) }}">{{ $post->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- end related posts -->

                </article> <!-- end standard post -->

            </div> <!-- end col -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">
                <!-- Widget Popular/Latest Posts -->
                <div class="widget widget-tabpost">
                    <div class="tabs widget-tabpost__tabs">
                        <ul class="tabs__list widget-tabpost__tabs-list">
                            <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
                                <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">الأكثر قراءة</a>
                            </li>
                            <li class="tabs__item widget-tabpost__tabs-item">
                                <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">آخر الفيديوهات</a>
                            </li>
                        </ul> <!-- end tabs -->

                        <!-- tab content -->
                        <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">

                            <div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
                                <ul class="post-list-small">
                                    @foreach($trendings as $trending)
                                        <li class="post-list-small__item">
                                            <article class="post-list-small__entry clearfix">
                                                <div class="post-list-small__img-holder">
                                                    <div class="thumb-container thumb-75">
                                                        <a href="{{ route('news-post', ['category' => $trending->category->slug, 'news' => $trending->slug ]) }}">
                                                            <img data-src="/photos/{{ $trending->img }}" src="/website/img/empty.png" alt="" class=" lazyload">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-list-small__body">
                                                    <h3 class="post-list-small__entry-title">
                                                        <a href="{{ route('news-post', ['category' => $trending->category->slug, 'news' => $trending->slug ]) }}">{{ $trending->title }}</a>
                                                    </h3>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-date">
                                                            <i class="ui-date"></i>
                                                            {{ !$trending->created_at->setLocale('ar') }}
                                                            {{ $trending->created_at->diffforhumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="tabs__content-pane" id="tab-comments">
                                <ul class="post-list-small">
                                    @foreach($videos as $video)
                                        <li class="post-list-small__item">
                                            <article class="post-list-small__entry clearfix">
                                                <div class="post-list-small__img-holder">
                                                    <div class="thumb-container thumb-75">
                                                        <a href="{{ route('video', ['slug' => $video->slug]) }}">
                                                            <img data-src="http://img.youtube.com/vi/{{ str_replace('https://www.youtube.com/embed/', '',$video->url) }}/0.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-list-small__body">
                                                    <h3 class="post-list-small__entry-title">
                                                        <a href="{{ route('video', ['slug' => $video->slug]) }}">{{ $video->title }}</a>
                                                    </h3>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-date">
                                                            <i class="ui-date"></i>
                                                            {{ !$video->created_at->setLocale('ar') }}
                                                            {{ $video->created_at->diffforhumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </li>
                                    @endforeach
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

                <!-- Widget Carousel -->
                <div class="widget">
                    <h4 class="widget-title">انفو جراف</h4>
                    <div id="owl-single" class="owl-carousel owl-theme">

                        @foreach($infographs as $infograph)
                            <article class="entry">
                                <div class="entry__img-holder mb-0">
                                    <a href="{{ route('info-graph', ['slug' => $infograph->slug]) }}">
                                        <div class="thumb-bg-holder">
                                            <img data-src="/photos/{{ $infograph->img }}" style="height: 320px" src="/photos/{{ $infograph->img }}" class="entry__img owl-lazy" alt="">
                                            <div class="bottom-gradient"></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="thumb-text-holder">
                                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                                        <a href="{{ route('info-graph', ['slug' => $infograph->slug]) }}">{{ $infograph->title }}</a>
                                    </h2>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <!-- Widget Tags -->
                <div class="widget widget_tag_cloud">
                    <h4 class="widget-title">كلامات البحث</h4>
                    <div class="tagcloud">
                        @foreach($trending_searches as $search)
                            <a href="{{ route('search', ['word' => $search->word]) }}">{{ $search->word }}</a>
                        @endforeach
                    </div>
                </div>
            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->
@endsection

@section('footer')
    <script> $(".fb-comments").attr("data-href", window.location.href);</script>

@endsection