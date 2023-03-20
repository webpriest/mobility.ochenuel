<x-front-layout title="OpenStreet">
    <section class="page-title" style="background-image:url(storage/images/background/urban.webp);">
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
                        @foreach($openstreets as $openstreet)
                        <div class="news-block wow fadeInRight">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="#">
                                            <img src="{{ $openstreet->photo() }}" alt="{{ $openstreet->title }}">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="#">{{ $openstreet->title }}</a></h4>
                                    <div class="text">{!! $openstreet->content !!}</div>
                                    {{-- <div class="btn-box"><a href="#" class="read-more">Read More</a></div> --}}
                                </div>
                            </div>
                        </div>                       
                        @endforeach
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