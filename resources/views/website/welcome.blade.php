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
                        <div class="thumb-bg-holder owl-lazy" data-src="/photos/{{ $latest_news[0]->img }}">
                            <img src="/photos/{{ $latest_news[0]->img }}" alt="" class="d-none">
                            <a href="{{ route('news-post', ['category' => $latest_news[0]->category->slug, 'news' => $latest_news[0]->slug ]) }}" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="{{ route('category', ['category' => $latest_news[0]->category->slug]) }}" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">{{ $latest_news[0]->category->title }}</a>
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('news-post', ['category' => $latest_news[0]->category->slug, 'news' => $latest_news[0]->slug ]) }}">{{ $latest_news[0]->title }}</a>
                            </h2>
                        </div>
                    </article>

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="/photos/{{ $latest_news[1]->img }}">
                            <img src="/photos/{{ $latest_news[1]->img }}" alt="" class="d-none">
                            <a href="{{ route('news-post', ['category' => $latest_news[1]->category->slug, 'news' => $latest_news[1]->slug ]) }}" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="{{ route('category', ['category' => $latest_news[1]->category->slug]) }}" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">{{ $latest_news[1]->category->title }}</a>
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('news-post', ['category' => $latest_news[1]->category->slug, 'news' => $latest_news[1]->slug ]) }}">{{ $latest_news[1]->title }}</a>
                            </h2>
                        </div>
                    </article>

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="/photos/{{ $latest_news[2]->img }}">
                            <img src="/photos/{{ $latest_news[2]->img }}" alt="" class="d-none">
                            <a href="{{ route('news-post', ['category' => $latest_news[2]->category->slug, 'news' => $latest_news[2]->slug ]) }}" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="{{ route('category', ['category' => $latest_news[2]->category->slug]) }}" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">{{ $latest_news[2]->category->title }}</a>
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('news-post', ['category' => $latest_news[2]->category->slug, 'news' => $latest_news[2]->slug ]) }}">{{ $latest_news[2]->title }}</a>
                            </h2>
                        </div>
                    </article>

                </div> <!-- end owl slider -->
            </div> <!-- end large post slider -->


            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url('/photos/{{ $latest_news[3]->img }}');">
                        <a href="{{ route('news-post', ['category' => $latest_news[3]->category->slug, 'news' => $latest_news[3]->slug ]) }}" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="{{ route('news-post', ['category' => $latest_news[3]->category->slug, 'news' => $latest_news[3]->slug ]) }}">10 طرق تتبعها داعش لتنفيذ عملياتها الارهابية</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="">{{ $latest_news[3]->writer }}</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{ !$latest_news[3]->created_at->setLocale('ar') }}
                                {{ $latest_news[3]->created_at->diffforhumans() }}
                            </li>
                            {{--<li class="entry__meta-comments">--}}
                                {{--<i class="ui-comments"></i>--}}
                                {{--<a href="#">115</a>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </article>
            </div>

            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url('/photos/{{ $latest_news[4]->img }}');">
                        <a href="{{ route('news-post', ['category' => $latest_news[4]->category->slug, 'news' => $latest_news[4]->slug ]) }}" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="{{ route('news-post', ['category' => $latest_news[4]->category->slug, 'news' => $latest_news[4]->slug ]) }}">10 طرق تتبعها داعش لتنفيذ عملياتها الارهابية</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="">{{ $latest_news[4]->writer }}</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{ !$latest_news[4]->created_at->setLocale('ar') }}
                                {{ $latest_news[4]->created_at->diffforhumans() }}
                            </li>
                            {{--<li class="entry__meta-comments">--}}
                                {{--<i class="ui-comments"></i>--}}
                                {{--<a href="#">115</a>--}}
                            {{--</li>--}}
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
                                @foreach($pane_news->take(4) as $category)
                                <li class="tabs__item @if($pane_news[3] == $category) tabs__item--active @endif">
                                    <a href="#{{ $category->slug }}" class="tabs__trigger">{{ $category->title }}</a>
                                </li>
                                @endforeach
                            </ul> <!-- end tabs -->
                        </div>
                    </div>

                    <!-- tab content -->
                    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                        @foreach($pane_news->take(4) as $category)
                        <div class="tabs__content-pane @if($pane_news[3] == $category) tabs__content-pane--active @endif" id="{{ $category->slug }}">
                            <div class="row">

                                @foreach($category->news->take(2) as $news)

                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $news->slug ]) }}">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="/photos/{{ $news->img }}" src="/photos/{{ $news->img }}" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category"></a>
                                                <h2 class="entry__title">
                                                    <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $news->slug ]) }}">{{ $news->title }}</a>
                                                </h2>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <i class="ui-author"></i>
                                                        <a href="">{{ $news->writer }}</a>
                                                    </li>
                                                    <li class="entry__meta-date">
                                                        <i class="ui-date"></i>
                                                        {{ !$news->created_at->setLocale('ar') }}
                                                        {{ $news->created_at->diffforhumans() }}
                                                    </li>
                                                    {{--<li class="entry__meta-comments">--}}
                                                        {{--<i class="ui-comments"></i>--}}
                                                        {{--<a href="#">115</a>--}}
                                                    {{--</li>--}}
                                                </ul>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                {{ str_limit($news->description, 160)}}
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div> <!-- end pane 1 -->
                        @endforeach

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

                        @foreach($pane_latest as $category)
                            @if($category->news->count())
                        <!-- World -->
                        <div class="col-md-6 mb-40">
                            <div class="title-wrap bottom-line bottom-line--orange">
                                <h3 class="section-title section-title--sm">{{ $category->title }}</h3>
                            </div>
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $category->news[0]->slug ]) }}">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="/photos/{{ $category->news[0]->img }}" src="/photos/{{ $category->news[0]->img }}" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $category->news[0]->slug ]) }}">{{ $category->news[0]->title }}</a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <i class="ui-author"></i>
                                                <a href="">{{ $category->news[0]->writer }}</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                {{ !$category->news[0]->created_at->setLocale('ar') }}
                                                {{ $category->news[0]->created_at->diffforhumans() }}
                                            </li>
                                            {{--<li class="entry__meta-comments">--}}
                                                {{--<i class="ui-comments"></i>--}}
                                                {{--<a href="#">115</a>--}}
                                            {{--</li>--}}
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p>{{ str_limit($category->news[0]->description, 160) }}</p>
                                    </div>
                                </div>
                            </article>
                            <ul class="post-list-small post-list-small--border-top">
                                @foreach(array_except($category->news, 0) as $news)
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry">
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $news->slug ]) }}">{{ $news->title }}</a>
                                            </h3>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-date">
                                                    <i class="ui-date"></i>
                                                    {{ !$news->created_at->setLocale('ar') }}
                                                    {{ $news->created_at->diffforhumans() }}
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                                @endforeach
                            </ul>

                        </div> <!-- end world -->
                        @endif
                        @endforeach
                    </div>
                </section> <!-- end posts from categories -->


            </div> <!-- end posts -->

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

@endsection