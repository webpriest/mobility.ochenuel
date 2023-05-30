<section class="speakers-section-three">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Speakers</span>
            <h2>Our Prolific Speakers</h2>
        </div>
        @if($speakers->isNotEmpty())
        <div class="row">
            @foreach($speakers as $speaker)
            <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ route('speaker.show', $speaker) }}"><img src="{{ $speaker->avatar() }}" alt="{{ $speaker->name }}"></a></figure>
                    </div>
                    <div class="info-box">
                        <span class="title">{{ $speaker->title }}</span>
                        <h4 class="name"><a href="{{ route('speaker.show', $speaker) }}">{{ Str::limit($speaker->name, 20, '...') }}</a></h4>
                        <span class="designation">{{ $speaker->country->country }}</span>
                    </div>
                    <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn-box">
            <a href="{{ route('speaker.index') }}" class="theme-btn btn-style-one"><span class="btn-title">More Speakers</span></a>
        </div>
        @endif
    </div>
</section>