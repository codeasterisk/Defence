@extends('layouts.app')

@section('title')
البحث عن "{{ $word }}"
@endsection

@section('header')

@endsection

@section('content')
    <br>
    <br>
    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- post content -->
            <div class="col-lg-8 blog__content mb-30">

                <h1 class="mb-20">البحث عن "{{ $word }}"</h1>
                <div class="search-form mb-20">
                    <input type="text" placeholder="إبحث عن مقال" class="search-input" id="search1">
                    <button onclick="search()" class="search-button btn btn-lg btn-color btn-button" style="right:auto;left: 0;">
                        <i class="ui-search nav__search-icon"></i>
                    </button>
                </div>

                @foreach($news as $post)
                <article class="entry post-list">
                    <div class="entry__img-holder post-list__img-holder">
                        <a href="{{ route('news-post', ['category' => $post->category->slug, 'news' => $post->slug]) }}">
                            <div class="thumb-container thumb-75">
                                <img data-src="/photos/{{ $post->img }}" src="img/empty.png" class="entry__img lazyload" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="entry__body post-list__body">
                        <div class="entry__header">
                            <a href="{{ route('category', ['category' => $post->category->slug]) }}" class="entry__meta-category">{{ $post->category->title }}</a>
                            <h2 class="entry__title">
                                <a href="{{ route('news-post', ['category' => $post->category->slug, 'news' => $post->slug]) }}">{{ $post->title }}</a>
                            </h2>
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
                        <div class="entry__excerpt">
                            <p>{!! str_limit($post->description, 160) !!}</p>
                        </div>
                    </div>
                </article>
                @endforeach
                <!-- Pagination -->
                <div class="row">
                    <div class="col-xs-12" style="margin: 0 auto">
                        <!-- Pagination -->
                        {{ $news->links() }}
                    </div>
                </div>
            </div> <!-- end col -->

            @include('website.aside')
        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection

@section('footer')
    <script>function search() { window.location.href = "{{ route('search', ['word' => '']) }}/" + $('#search1').val(); }</script>

@endsection