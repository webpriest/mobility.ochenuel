<x-front-layout title="Vision and Mission">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>Vision & Mission</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-sidebar row">
                        <div class="feature-block-two col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon icofont-eye"></span></div>
                                <h4><a href="javascript:void(0)">Vision</a></h4>
                                <div class="text">To lead the development of smart and sustainable mobility in Africa.</div>
                            </div>
                        </div>
                        
                        <div class="feature-block-two col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon icofont-bullseye"></span></div>
                                <h4><a href="javascript:void(0)">Mission</a></h4>
                                <div class="text">To be the best, most reliable and knowledge driven mobility service provider in Africa.</div>
                            </div>
                        </div>
                        
                        <div class="feature-block-two col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon icofont-diamond"></span></div>
                                <h4><a href="javascript:void(0)">Core Values</a></h4>
                                <div class="text">Honesty, Partnership, Technology.</div>
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