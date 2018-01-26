@extends('layouts.app')

@section('title')
الصفحة الرئيسية
@endsection

@section('header')

@endsection

@section('content')
    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-12 blog__content mb-30">

                <div class="title-wrap">
                    <h1>{{ $category }}</h1>
                </div>

                <div class="row">
                    @foreach($items as $item)
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="{{ $item->category->type == 'video' ? route('video', ['slug' => $video->slug]) : ( $item->category->type == 'news' ? route('news-post', ['category' => $item->category->slug, 'news' => $item->slug]) : route('info-graph', ['slug' => $infograph->slug])) }}">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="{{ $item->category->type == 'video' ? "http://img.youtube.com/vi/".str_replace('https://www.youtube.com/embed/', '',$video->url)."/0.jpg" : '/photos/'.$item->img }}" src="img/empty.png" class="entry__img lazyload" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="{{ $item->category->type == 'video' ? route('video', ['slug' => $video->slug]) : ( $item->category->type == 'news' ? route('news-post', ['category' => $item->category->slug, 'news' => $item->slug]) : route('info-graph', ['slug' => $infograph->slug])) }}">{{ $item->title }}</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="">{{ $item->writer }}</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            {{ !$item->created_at->setLocale('ar') }}
                                            {{ $item->created_at->diffforhumans() }}
                                        </li>
                                        {{--<li class="entry__meta-comments">--}}
                                            {{--<i class="ui-comments"></i>--}}
                                            {{--<a href="#">115</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                                @if($item->category->type != 'infographic')
                                <div class="entry__excerpt">
                                    <p>{{ str_limit($item->description,160) }}</p>
                                </div>
                                @endif
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xs-12" style="margin: 0 auto">
                        <!-- Pagination -->
                        {{ $items->links() }}
                    </div>
                </div>

            </div> <!-- end col -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection

@section('footer')

@endsection