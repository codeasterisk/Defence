@extends('layouts.app')

@section('title')
    {{$post->category->title}} | {{ $post->title }}
@endsection
@section('meta')
    <meta name="keywords" content="@foreach(explode(' ', $post->title) as $key){!!   "$key, " !!}@endforeach">
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
    <br>
    <br>
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
                        <a class="breadcrumbs__url">الفيديوهات</a>
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
                                <a>{{ $post->writer->name }}</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{ !$post->created_at->setLocale('ar') }}
                                {{ $post->created_at->diffforhumans() }}
                            </li>
                        </ul>
                    </div>

                    <div class="entry__img-holder">
                        <iframe data-src="{{ $post->url }}" style="height: 300px" frameborder="0" allow="autoplay; encrypted-media"src="/website/img/blog/single_post_featured_img.jpg" class="entry__img lazyload" allowfullscreen></iframe>
                    </div>

                    <!-- Share -->
                    <div class="entry__share">
                        <div class="socials entry__share-socials">
                            <a href="#" target="_blank" class="fb-share social social-facebook entry__share-social social--wide social--medium">
                                <i class="ui-facebook"></i>
                                <span class="social__text">Share on Facebook</span>
                            </a>
                            <a href="#" target="_blank" style="margin:5px;" class="twitter-share social social-twitter entry__share-social social--wide social--medium">
                                <i class="ui-twitter"></i>
                                <span class="social__text">Share on Twitter</span>
                            </a>
                        </div>
                    </div> <!-- share -->

                    <div class="entry__article">
                        {!! $post->description !!}
                        <!-- tags -->
                        <div class="entry__tags">
                            <span class="entry__tags-label">الكلمات الدلالية:</span>
                            @foreach(explode(" ", $post->title) as $word)
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
                                        <a href="{{ route('video', ['slug' => $post->slug]) }}">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="http://img.youtube.com/vi/{{ str_replace('https://www.youtube.com/embed/', '',$post->url) }}/0.jpg" src="/website/img/empty.png" alt="" class=" lazyload">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title entry__title--sm">
                                                <a href="{{ route('video', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
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

            @include('website.aside')

        </div> <!-- end content -->
    </div> <!-- end main container -->
@endsection

@section('footer')
    <script> $(".fb-comments").attr("data-href", window.location.href);</script>
    <script> $(".twitter-share").attr("href", "https://twitter.com/share?url=" + window.location.href);</script>
    <script> $(".fb-share").attr("href", "http://www.facebook.com/sharer.php?u=" + window.location.href);</script>@endsection