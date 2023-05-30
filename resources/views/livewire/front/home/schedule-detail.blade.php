<div class="tabs-content">
    <div class="tab active-tab" id="tab-1">
        <div class="schedule-timeline">
            <!-- schedule Block -->
            <div class="schedule-block">
                <div class="inner-box">
                    <div class="inner">
                        <div class="date">{{ $type === 'SUMCOURSE' ? $programme->event_date->format('F d, Y').' - '.$programme->event_date->addDays($programme->days - 1)->format('F d, Y') : $programme->os_date->format('F d, Y') }}</div>
                        <div class="d-flex">
                            <div class="speaker-info">
                                <figure class="photo-100"><img src="{{ $type === 'SUMCOURSE' ? $programme->badge() : $programme->photo() }}" alt=""></figure>
                            </div>
                            <div>
                                <h4><a href="#">{{ $programme->theme ?? $programme->title }}</a></h4>
                                <h5 class="name">{{ $programme->sub_theme }}</h5>
                                <div class="text">{{ $programme->address ?? $programme->location }}</div>
                                <div class="text"><i class="icofont-clock-time"></i> {{ $programme->os_time ? $programme->os_time->format('H:i A') : $programme->event_time->format('H:i A') }}</div>
                            </div>
                        </div>
                        <div class="btn-box">
                            @if($type === 'SUMCOURSE')
                                <a href="{{ route('sumcourse.show', $programme) }}" class="theme-btn">Read More</a>
                            @else
                                <a href="{{ route('openstreet.event.show', $programme) }}" class="theme-btn">Read More</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if($flyer)
            <div class="schedule-block">
                <div class="inner-box">
                    <div class="inner">
                        <div class="date">{{ $flyer->description }}</div>
                        
                        <div>
                           <img src="{{ $flyer->photo() }}" alt="{{ $flyer->description }}"> 
                        </div>
                        <div class="btn-box">
                            @if($flyer->sc_event)
                                <a href="{{ route('sumcourse.flyer', $flyer) }}" class="theme-btn">View Details</a>
                            @else
                                <a href="{{ route('openstreet.event.flyer', $flyer) }}" class="theme-btn">View Details</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>