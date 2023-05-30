<aside class="sidebar padding-left">
    <div class="sidebar-widget popular-posts">
        <h4 class="sidebar-title">Expertise</h4>
        <div class="widget-content">
            @if($expertises->isNotEmpty())
                @foreach($expertises as $expertise)
                    <article class="post">
                        <div class="post-inner">
                            <figure class="post-thumb"><a href="{{ route('expertise.show', $expertise) }}"><img src="{{ $expertise->photo() }}" alt=""></a></figure>
                            <div class="text"><a href="{{ route('expertise.show', $expertise) }}">{{ $expertise->title }}</a></div>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Tags Widget -->
    <div class="sidebar-widget popular-tags">
        <h4 class="sidebar-title">Tags</h4>
        <div class="widget-content">
            <a href="#">Event</a>
            <a href="#">Meetup</a>
            <a href="#">Conference</a>
            <a href="#">Meeting</a>
            <a href="#">Business</a>
            <a href="#">Seminar</a>
            <a href="#">Workshop</a>
            <a href="#">Professionals</a>
            <a href="#">Eventa</a>
        </div>
    </div>
</aside>