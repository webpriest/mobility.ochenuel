<section class="news-section alternate">
    <div class="auto-container">
        @if($posts->isNotEmpty())
        <div class="row">
            @foreach($posts as $post)
            <div class="news-block col-md-6 col-sm-12 wow fadeInRight">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ route('news.show', $post) }}"><img src="{{ $post->photo() }}" alt="{{ $post->title }}"></a></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-info">
                            <li><span class="far fa-user"></span> {{ $post->author }}</li>
                            <li><span class="far fa-calendar"></span> {{ $post->news_date->format('F d, Y') }}</li>
                        </ul>
                        <h4><a href="{{ route('news.show', $post) }}">{{ $post->title }}</a></h4>
                        <div class="btn-box"><a href="{{ route('news.show', $post) }}" class="read-more">Read More</a></div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        @endif

    </div>
</section>