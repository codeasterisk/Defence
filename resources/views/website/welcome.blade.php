@extends('layouts.app')

@section('title')
الصفحة الرئيسية
@endsection

@section('header')

@endsection
@section('meta')
    <meta name="keywords" content="{{getsetting('MetaTags')}}">
    <meta name="description" content="{{getsetting('SiteDesciprtion')}}">
    <meta name="author" content="شركة كود أستيريسك لتطوير البرمجيات, مصر - codeasterisk.com">
@endsection
@section('content')
    <!-- Featured Posts Grid -->
    <section class="featured-posts-grid bg-dark">
        <div class="container clearfix">

            <!-- Large post slider -->
            <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="{{getimg($latest_news[0]->img) }}">
                            <img src="{{getimg($latest_news[0]->img) }}" alt="" class="d-none">
                            <a href="{{ route('news-post', ['category' => $latest_news[0]->category->slug, 'news' => $latest_news[0]->slug ]) }}" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="{{ route('category', ['category' => $latest_news[0]->category->slug]) }}" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">{{ $latest_news[0]->category->title }}</a>
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('news-post', ['category' => $latest_news[0]->category->slug, 'news' => $latest_news[0]->slug ]) }}">{{ $latest_news[0]->prefix }}: {{ $latest_news[0]->title }}</a>
                            </h2>
                        </div>
                    </article>

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="{{getimg($latest_news[1]->img)}}">
                            <img src="{{ getimg($latest_news[1]->img) }}" alt="" class="d-none">
                            <a href="{{ route('news-post', ['category' => $latest_news[1]->category->slug, 'news' => $latest_news[1]->slug ]) }}" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="{{ route('category', ['category' => $latest_news[1]->category->slug]) }}" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">{{ $latest_news[1]->category->title }}</a>
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('news-post', ['category' => $latest_news[1]->category->slug, 'news' => $latest_news[1]->slug ]) }}">{{ $latest_news[1]->prefix }}: {{ $latest_news[1]->title }}</a>
                            </h2>
                        </div>
                    </article>

                    <article class="entry featured-posts-grid__entry">
                        <div class="thumb-bg-holder owl-lazy" data-src="{{getimg($latest_news[2]->img) }}">
                            <img src="{{ getimg($latest_news[2]->img) }}" alt="" class="d-none">
                            <a href="{{ route('news-post', ['category' => $latest_news[2]->category->slug, 'news' => $latest_news[2]->slug ]) }}" class="thumb-url"></a>
                            <div class="bottom-gradient"></div>
                        </div>

                        <div class="thumb-text-holder">
                            <a href="{{ route('category', ['category' => $latest_news[2]->category->slug]) }}" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">{{ $latest_news[2]->category->title }}</a>
                            <h2 class="thumb-entry-title">
                                <a href="{{ route('news-post', ['category' => $latest_news[2]->category->slug, 'news' => $latest_news[2]->slug ]) }}">{{ $latest_news[2]->prefix }}: {{ $latest_news[2]->title }}</a>
                            </h2>
                        </div>
                    </article>

                </div> <!-- end owl slider -->
            </div> <!-- end large post slider -->

            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url({{ getimg($latest_news[3]->img) }});">
                        <a href="{{ route('info-graph', ['slug' => $latest_news[3]->slug ]) }}" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="{{ route('info-graph', ['slug' => $latest_news[3]->slug ]) }}">{{ $latest_news[3]->title }}</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="">{{ $latest_news[3]->writer->name }}</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{ !$latest_news[3]->created_at->setLocale('ar') }}
                                {{ $latest_news[3]->created_at->diffforhumans() }}
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder" style="background-image: url('http://img.youtube.com/vi/{{ str_replace('https://www.youtube.com/embed/', '',$latest_news[4]->url) }}/0.jpg');">
                        <a href="{{ route('video', ['slug' => $latest_news[4]->slug ]) }}" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <h2 class="thumb-entry-title thumb-entry-title--sm">
                            <a href="{{ route('video', ['slug' => $latest_news[4]->slug ]) }}">{{ $latest_news[4]->title }}</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="">{{ $latest_news[4]->writer->name }}</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{ !$latest_news[4]->created_at->setLocale('ar') }}
                                {{ $latest_news[4]->created_at->diffforhumans() }}
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
                                @foreach($pane_news->take(4) as $category)
                                <li class="tabs__item @if($pane_news[count($pane_news) - 1 >= 4 || 3] == $category) tabs__item--active @endif">
                                    <a href="#{{ $category->slug }}" class="tabs__trigger">{{ $category->title }}</a>
                                </li>
                                @endforeach
                            </ul> <!-- end tabs -->
                        </div>
                    </div>

                    <!-- tab content -->
                    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                        @foreach($pane_news->take(4) as $category)
                        <div class="tabs__content-pane @if(isset($pane_news[3])) @if($pane_news[3] == $category) tabs__content-pane--active @endif @endif" id="{{ $category->slug }}">
                            <div class="row">

                                @foreach($category->news->take(2) as $news)

                                <div class="col-md-6">
                                    <article class="entry">
                                        <div class="entry__img-holder">
                                            <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $news->slug ]) }}">
                                                <div class="thumb-container thumb-75">
                                                    <img data-src="{{getimg($news->img )}}" src="img/empty.png" class="entry__img lazyload" alt="" />
                                                </div>
                                            </a>
                                        </div>

                                        <div class="entry__body">
                                            <div class="entry__header">
                                                <a href="#" class="entry__meta-category"></a>
                                                <h2 class="entry__title">
                                                    <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $news->slug ]) }}">{{ $news->prefix }}: {{ $news->title }}</a>
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
                                            <img data-src="{{ getimg($category->news[0]->img) }}" src="img/empty.png" class="entry__img lazyload" alt="" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <h2 class="entry__title">
                                            <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $category->news[0]->slug ]) }}">{{ $category->news[0]->prefix }}: {{ $category->news[0]->title }}</a>
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
                                                <a href="{{ route('news-post', ['category' => $category->slug, 'news' => $news->slug ]) }}">{{ $news->prefix }}: {{ $news->title }}</a>
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

          @include('website.aside')
        </div> <!-- end content -->
    </div> <!-- end main container -->


@endsection

@section('footer')

@endsection