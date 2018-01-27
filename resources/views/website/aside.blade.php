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
                                                <img data-src="{{getimg($trending->img) }}" src="/website/img/empty.png" alt="" class=" lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="{{ route('news-post', ['category' => $trending->category->slug, 'news' => $trending->slug ]) }}">{{ $trending->prefix }}: {{ $trending->title }}</a>
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
                                <img data-src="{{getimg($infograph->img) }}" style="height: 320px" src="{{ getimg($infograph->img) }}" class="entry__img owl-lazy" alt="">
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
