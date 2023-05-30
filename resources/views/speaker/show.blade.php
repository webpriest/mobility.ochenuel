<x-front-layout title="Speaker">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>Speaker</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Speaker</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-sidebar">
                        <section class="speaker-detail">
                            <div class="auto-container">
                                <div class="row">
                                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{ $speaker->avatar() }}" alt="{{ $speaker->name }}"></figure>
                                            <ul class="social-icon-two social-icon-colored text-center">
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                    
                                    <div class="info-column col-lg-8 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <div class="text-box">
                                                <h3>{{ $speaker->title.' '.$speaker->name }}</h3>
                                                <h5>{{ $speaker->country->country }}</h5>
                                                {!! $speaker->bio !!}
                                                <h4>Sessions by {{ $speaker->name }}</h4>
                                                
                                                @if($speaker->lectures)
                                                <div class="row">
                                                    @foreach($speaker->lectures as $lecture)
                                                    <div class="col-lg-12">
                                                        <div class="speaker-session-info">
                                                            <h5>Theme: {{ $lecture->sc_event->theme }}</h5>
                                                            <span> {{ $lecture->sc_event->event_date->format('F d, Y') }} </span>
                                                            <p>Topic: <strong>{{ $lecture->topic }}</strong></p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <livewire:front.page.sidebar />
                </div>
            </div>
        </div>
    </div>
</x-front-layout>