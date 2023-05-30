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
                                            <img src="{{ $openstreet->photo() }}" alt="{{ $openstreet->title }}">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="#">{{ $openstreet->title }}</a></h4>
                                    <div class="text">{{  $openstreet->location  }}</div>
                                    
                                </div>
                            </div>
                        </div>                       

                    </div>

                    <section class="gallery-section">
                        <div class="auto-container">
                            <div class="sec-title text-center">
                                <span class="title">Gallery</span>
                            </div>
                
                            @if($openstreet->os_galleries)
                            <div class="row">
                                @foreach($openstreet->os_galleries as $gallery)
                                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ $gallery->photo() }}" alt="">
                                            <figcaption class="small-caption">{{ $gallery->description }}</figcaption>
                                        </figure>
                                        <div class="overlay-box"><a href="{{ $gallery->photo() }}" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </section>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <livewire:front.page.sidebar />
                </div>
            </div>
        </div>
    </div>
</x-front-layout>