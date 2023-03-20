<div>
    <section class="banner-section-two" style="background-image: url(/storage/images/background/home.webp);">
        <div class="auto-container">
            <div class="outer-container">
                <div class="content">
                    <div class="upper-content">
                        <div class="title">Sustainable Urban Mobility Course</div>
                        <h1>SUMCOURSE <span>| {{ $sumcourse->event_date->format('Y') }}</span></h1>
                        <h2>{{ $sumcourse->theme }}</span></h2>
                    </div>
                    <div class="lower-content">
                        <div class="row clearfix">
                            <div class="column col-lg-4 col-md-4 col-sm-12">
                                <div class="lower-title">when ?</div>
                                <div class="date">
                                    {{ $this->date_range() }}<br>
                                    {{ $sumcourse->event_time->format('H:i A') }}
                                </div>
                            </div>
                            <div class="column col-lg-8 col-md-8 col-sm-12">
                                <div class="lower-title">where ?</div>
                                <div class="date">{{ $sumcourse->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="coming-soon-section-two">
        <div class="auto-container">
            <div class="outer-box">
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="{{ $sumcourse->event_date }}"></div></div>
            </div>
        </div>
    </section>
</div>