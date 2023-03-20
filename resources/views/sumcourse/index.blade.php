<x-front-layout title="SUMCourse">
    <section class="page-title" style="background-image:url(storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>SUMCourse</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>SUMCourse</li>
            </ul>
        </div>
    </section>

    <section class="event-detail">
        <div class="auto-container">
            <div class="image-box">
                <figure class="image wow fadeIn"><a href="{{ $upcoming_event->badge() }}" class="lightbox-image"><img src="{{ $upcoming_event->badge() }}" alt=""></a></figure>
            </div>

            <div class="content-box">
                <div class="speaker-info d-flex justify-content-between">
                    <div>
                        <a href="#" class="theme-btn color-pink-button">
                            <span class="btn-title">
                                <span class="icofont-user"></span> Register for SUMCourse
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="theme-btn color-blue-button">
                            <span class="btn-title">
                                <i class="icofont-download"></i> Download Flyer
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="theme-btn color-green-button">
                            <span class="btn-title">
                                <span class="icofont-image"></span> View Photos
                            </span>
                        </a>
                    </div>
                </div>
                <ul class="upper-info">
                    <li><span class="icon far fa-clock"></span>{{ $upcoming_event->date_range() }}</li>
                    <li><span class="icon fa fa-map-marker-alt"></span>{{ $upcoming_event->address }}</li>
                    <li><span class="icon far fa-clock"></span>{{ $upcoming_event->event_time->format('H:i A') }}</li>
                </ul>
                <h2>{{ $upcoming_event->theme }}</h2>
                <div class="text">
                    <p>Our ability to correctly and efficiently model urban mobility through inclusive planning and creation of sustainable platform for implementation of best practices, yet people oriented mobility systems have critical impact on resident's quality of life and indeed everyday functioning of our cities. Whereas, a greater majority of countries in the developed world have since realized the concern with current mobility practices and are reengineering mobility, changing mindset and developing new culture in sustainable mobility, Africa and the rest of the developing world lag behind.</p>
                    <p>There is obviously a wide knowledge gap and there is low level of awareness. For instance, most cities of Africa hardly have urban mobility policies, where it exist, it's only a component of other policies. Most regional governments or States don't even have ministries of transportation, talk more of urban mobility. Worst still, unlike most developed world and especially Europe where urban mobility curriculum are being developed and thought as distinct courses in Universities and there are several long and short courses for bridging the Knowledge gap, Africa and most countries in the developing world do not have these.</p>
    
                    <h4>Who Should Attend</h4>
    
                    <ul>
                        <li>The course aims to build the capacity of Policy & decision makers</li>
                        <li>Mobility project implementers, Engineers, consultants</li>
                        <li>Transport and mobility researchers & academics,& advocates</li>
                        <li>Commercial transit & taxi operators and businessmen/investors</li>
                        <li>Urban and transportation planners seeking to broading knowledge or specialise</li>
                    </ul>
    
                    <p>This will enable our cities develop and implement appropriate policies, programs and investments in a manner that meets the goals of the SDGs and the New Urban Agenda</p>
                    <p>It also provides opportunity for transport graduates and consultants to professionalize in urban mobility and be certified for specialized service delivery. All participants must possess a minimum of BSc, HND or Diploma or equivalence from recognized academic institutions anywhere in the world. The course is offered in English with a possible French interpretation</p>
    
                    <h4>Contents</h4>
    
                    <p>The weeklong intensive course features in-depth analysis of global transport and mobility indicators, exclusive case studies of dynamic trends in cities and business models, dialogues sessions, excursions, practical hands on experiments and much more.</p>
    
                    <h4>Facilitators</h4>
                    <p>Meet the best experts on sustainable urban mobility and related issues, drawn from local and international academic institutions, government authorities, practicing experts and development partners such as the Transformative Urban Mobility Initiative (TUMI) of the German Development Cooperation (GIZ), Institute for Transport and Deveopment Policy (ITDP), UN Habitats Transport Division, Africa Sustainable Transport Policy Program (SSATP), Easter Alliance for Safe and Sustainable Transport (EASST), Africa Development Bank Transport Program, amongst others.</p>
                </div>
            </div>
        </div>
    </section>

    @if($past_events->isNotEmpty())
    <section class="news-section alternate">
        <div class="auto-container">
            <div class="row">

                @foreach($past_events as $event)
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('sumcourse.show', $event) }}"><img src="{{ $event->badge() }}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="icofont-clock-time"></span> {{ $event->date_range() }}</li>
                            </ul>
                            <h4><a href="{{ route('sumcourse.show', $event) }}">{{ $event->theme }}</a></h4>
                            <div class="btn-box"><a href="{{ route('sumcourse.show', $event) }}" class="read-more">Read More</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    @endif
</x-front-layout>