<aside class="sidebar padding-left">
    <div class="sidebar-widget popular-posts">
        <h4 class="sidebar-title">OpenStreet Events</h4>
        <div class="widget-content">

            @if($os_street_events)
                @foreach($os_street_events as $event)
                <article class="post">
                    <div class="post-inner">
                        <figure class="post-thumb">
                            <a href="{{ route('openstreet.event.show', $event) }}">
                                <img src="{{ $event->photo() }}" alt="{{ $event->title }}">
                            </a>
                        </figure>
                        <div class="post-info">{{ $event->os_date->format('F d, Y') }}</div>
                        <div class="side-title"><a href="{{ route('openstreet.event.show', $event) }}">{{ $event->title }}</a></div>
                    </div>
                </article>
                @endforeach
            @endif
        </div>
    </div>

    <div class="sidebar-widget popular-posts">
        <h4 class="sidebar-title">Latest Reports</h4>
        @if($sumcourse_reports)
        <div class="widget-content">
            @foreach($sumcourse_reports as $sumcourse_report)
            <article class="post">
                <a href="{{ route('sumcourse.report.show', $sumcourse_report) }}">
                    <img src="{{ asset('storage/'.$sumcourse_report->cover_image) }}" alt="report">
                </a>
            </article>
            @endforeach
        </div>
        @endif
    </div>
</aside>