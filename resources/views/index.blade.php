<x-front-layout title="Home">
    <livewire:sumcourse.home.hero />

    <!-- About Section -->
    <section class="about-section-two">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Ochenuel Mobility</span>
                            <h2>Welcome to Our Website</h2>
                            <div class="text">Ochenuel Mobility is a multi modal sustainable transport initiative covering road, rail, tram, cable, inland waterways transportation systems.</div>
                        </div>
                        <div class="row">
                            <div class="about-block  col-sm-12">
                                <div class="inner-box">
                                    <h4><span class="icon fa fa-eye"></span> Vision</h4>
                                    <div class="text">To lead the development of smart and sustainable mobility in Africa. </div>
                                </div>
                            </div>
                            <div class="about-block  col-sm-12">
                                <div class="inner-box">
                                    <h4><span class="icon fa fa-cogs"></span> Mission</h4>
                                    <div class="text">To be the best, most reliable and knowledge driven mobility service provider in Africa through cutting edge innovations, people centered mobility initiatives and environmentally friendly concepts.</div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box"><a href="{{ route('about.index') }}" class="theme-btn btn-style-three"><span class="btn-title">Know more</span></a></div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn"><img src="{{ asset('storage/images/about.webp') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->


    <!-- Features Section Three -->
    <section class="features-section-three no-pd-top">
        <div class="auto-container">
            <div class="row">
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon icofont-book-alt"></span></div>
                        <h4><a href="{{ route('sumcourse.index') }}">SUMCOURSE</a></h4>
                        <div class="text">The training arm of Ochenuel Mobility with a responsibility to create awareness ...</div>
                        <div class="link-box"><a href="{{ route('sumcourse.index') }}" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon icofont-bicycle-alt-1"></span></div>
                        <h4><a href="{{ route('openstreet.index') }}">OPENSTREETS</a></h4>
                        <div class="text">OpenStreets is a free event bringing together cycling and walking advocates, ...</div>
                        <div class="link-box"><a href="{{ route('openstreet.index') }}" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon icofont-bicycle"></span></div>
                        <h4><a href="{{ route('bikeshare.index') }}">Bike Share</a></h4>
                        <div class="text">We develop, implement and manage bike share programs, our expertise is based ...</div>
                        <div class="link-box"><a href="{{ route('bikeshare.index') }}" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon icofont-briefcase-1"></span></div>
                        <h4><a href="#">Consultancy</a></h4>
                        <div class="text">We consult at different levels of governance, creating opportunities for ...</div>
                        <div class="link-box"><a href="#" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <livewire:front.home.gallery />

    <!-- Fluid Section One -->
    <section class="fluid-section-one">
        <div class="outer-box clearfix">

            <!-- Content Column -->
            <div class="content-column">
                <div class="shape-layers">
                    <div class="shape-2"></div>
                    <div class="shape-1"></div>
                </div>
                <div class="inner-column">
                    <h3>Register for our next <br>SUMCOURSE 2023</h3>
                    <div class="text">Join hundreds of participants for the upcoming SUMCourse events in 2023. It promises to be educative, exciting and informative. Click the button below to get registered.</div>
                    <div class="btn-box"><a href="{{ route('registration.index') }}" class="theme-btn btn-style-four"><span class="btn-title">Register Now</span></a></div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image: url(/storage/images/register.webp);">
                <div class="image-box">
                    <figure class="image"><img src="{{ asset('storage/images/register.webp') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!--End Fluid Section One -->

    <!-- Speakers Section -->
    <livewire:front.home.speakers />
    <!-- End Speakers Section -->

    <livewire:front.home.schedule />

    <livewire:front.page.newsletters />

    <livewire:front.footer.partners />
    <!--End Clients Section-->
</x-front-layout>