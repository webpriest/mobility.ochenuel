<aside class="sidebar padding-left">
    <!-- Category Widget -->
    <div class="sidebar-widget categories">
        <h4 class="sidebar-title">Expertise</h4>
        <div class="widget-content">
            @if($sidebar_expertises)
                @foreach($sidebar_expertises as $expert)
                    <ul class="blog-categories">
                        <li><a href="{{ route('expertise.show', $expert) }}"><i class="icofont-stylish-right"></i> <small>{{ $expert->title }}</small></a></li>
                    </ul>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Post Widget -->
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

    <div class="sidebar-widget categories">
        <h4 class="sidebar-title">Features</h4>
        <div class="widget-content">
            <ul class="blog-categories">
                <li><a href="#"><i class="icofont-stylish-right"></i> <small>UN World Bicycle Day</small></a></li>
                <li><a href="#"><i class="icofont-stylish-right"></i> <small>Transport & the SDGs</small></a></li>
                <li><a href="#"><i class="icofont-stylish-right"></i> <small>Climate Change</small></a></li>
                <li><a href="#"><i class="icofont-stylish-right"></i> <small>Transport News</small></a></li>
            </ul>
        </div>
    </div>
</aside>