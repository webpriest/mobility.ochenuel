<x-front-layout title="OpenStreets Flyer">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>OpenStreets Flyer</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>OpenStreets</li>
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
                                <div class="lower-content">
                                    <div class="d-flex">
                                        <h4><a href="#">{{ $flyer->description }}</a></h4>
                                        <div class="">
                                            <a href="#" class="theme-btn">Download Flyer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="#">
                                            <img src="{{ $flyer->photo() }}" alt="{{ $flyer->description }}">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>                       
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