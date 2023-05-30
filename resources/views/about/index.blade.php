<x-front-layout title="Who we are">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>Who We Are</h1>
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
                    <div class="blog-sidebar">
                        <section class="about-section">
                            <div class="anim-icons full-width">
                                {{-- <span class="icon icon-dots wow fadeInleft"></span> --}}
                                <span class="icon icon-circle-1 wow zoomIn"></span>
                            </div>
                            <div class="auto-container">
                                <div class="row">
                                    <!-- Content Column -->
                                    <div class="content-column col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <div class="sec-title">
                                                <span class="title">ABOUT OCHENUEL MOBILITY</span>
                                                <h2>Welcome</h2>
                                                <div class="text">We are the sum of our collective passion, vision and expertise for creating the new mobility systems that is efficient, safe, economical and environmentally sustainable, inclusive, accessible and affordable by all irrespective of class ability and age.</div>
                                                
                                                <h4>What We Stand For</h4>
                                                <div class="text">It is our believe that to have the society of our dream, we must all hold ourselves accountable for the demands to achieve that dream. That means creating innovative solutions to the challenges of today and the ones the future will bring. This inspires us to stay curious, act locally, and think globally. This is the reason our Core Values are; Honesty, Partnership & Technology.</div>
                                                
                                                <h4>Our Team</h4>
                                                <div class="text">We are built on the strength of our people. In every place where we operate, our teams are guided by the mission, vision and uphold our collective beliefs. We have not very many professionals in our direct employment, but with a large network of independent consultants who are experts in the various fields of our operation, who are mobilized to undertake any task within their area of expertise in our acquisition.</div>
                                                
                                                <h4>Our Client</h4>
                                                <div class="text">Our clients includes government authorities at all levels (Federal, State/Regional, Local and city governments), private corporations and enterprises, local and international development partners, academic institutions and individuals.</div>
                                            </div>
                                            
                                            <div class="btn-box"><a href="contact.html" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a></div>
                                        </div>

                                        <div class="image-column col-lg-7 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image wow fadeIn">
                                                    <img src="{{ asset('storage/images/about.webp') }}" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Image Column -->
                                    {{-- <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                        <div class="image-box">
                                            <figure class="image wow fadeIn">
                                                <img src="{{ asset('storage/images/about.webp') }}" alt="">
                                            </figure>
                                        </div>
                                    </div> --}}
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