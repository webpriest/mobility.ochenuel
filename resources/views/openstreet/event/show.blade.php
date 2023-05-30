<x-front-layout title="OpenStreet">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>OpenStreet</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>OpenStreet</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-sidebar">
                        <!-- News Block Three -->

                        <div class="news-block wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="#">
                                            <img src="{{ $openstreetevent->photo() }}" alt="{{ $openstreetevent->title }}">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="#">{{ $openstreetevent->title }}</a></h4>
                                    <div class="text event-wrapper">
                                        <i class="icofont-location-pin"></i> {{ $openstreetevent->location }}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 text event-wrapper">
                                            <i class="icofont-calendar"></i> {{ $openstreetevent->os_date->format('F d, Y') }}
                                        </div>
                                        <div class="col-md-6 text event-wrapper">
                                            <i class="icofont-clock-time"></i> {{ $openstreetevent->os_time->format('H:i A') }}
                                        </div>
                                    </div>
                                    {{-- <div class="btn-box"><a href="#" class="read-more">Read More</a></div> --}}
                                </div>
                            </div>
                        </div>

                        <livewire:front.page.gallery :openstreetevent="$openstreetevent" />
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <livewire:front.page.os-street />
                </div>
            </div>
        </div>
    </div>
</x-front-layout>