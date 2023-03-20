<!DOCTYPE html>
 <html lang="en">
<head>
<meta charset="utf-8">
<title>Eventrox - Digital Events HTML Template | Homepage 01</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{ asset('assets/css/color-switcher-design.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js') }}"></script><![endif]-->
<!--[if lt IE 9]><script src={{ asset('assets/js/respond.js') }}"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}
 	<!-- Header span -->


    <!-- Main Header-->
    <header class="main-header">
        <div class="main-box">
        	<div class="auto-container clearfix">
            	<div class="logo-box">
                	<div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Classic</a></li>
                                        <li><a href="index-2.html">Home Conference</a></li>
                                        <li><a href="index-3.html">Home Meetup</a></li>
										<li><a href="index-4.html">Home Page Four</a></li>
                                        <li><a href="index-5.html">Home Page Five</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
												<li><a href="index-4.html">Home Page Four</a></li>
												<li><a href="index-5.html">Home Page Five</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="about-us.html">About</a>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="faqs.html">FAQ's</a></li>
										<li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="speakers.html">Speakers</a>
                                    <ul>
                                        <li><a href="speakers.html">Speakers</a></li>
                                        <li><a href="speakers-detail.html">Speakers Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="schedule.html">Schedule</a>
                                    <ul>
                                        <li><a href="schedule.html">Schedule</a></li>
                                        <li><a href="event-detail.html">Event Detail</a></li>
                                        <li><a href="buy-ticket.html">Buy Ticket</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="blog-sidebar.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="error-page.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer box -->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="flaticon-search"></span></div>
                        </div>

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Get Tickets</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/logo-2.png') }}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!--End Main Header -->

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <span class="title">January 20, 2020</span>
                        <h2> World Digital <br>Conference 2020</h2>
                        <ul class="info-list">
                            <li><span class="icon fa fa-chair"></span> 5000 Seats</li>
                            <li><span class="icon fa fa-user-alt"></span> 12 SPEAKERS</li>
                            <li><span class="icon fa fa-map-marker-alt"></span> Palo, California</li>
                        </ul>
                        <div class="btn-box"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/2.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <span class="title">January 20, 2020</span>
                        <h2> World Digital <br>Conference 2020</h2>
                        <ul class="info-list">
                            <li><span class="icon fa fa-chair"></span> 5000 Seats</li>
                            <li><span class="icon fa fa-user-alt"></span> 12 SPEAKERS</li>
                            <li><span class="icon fa fa-map-marker-alt"></span> Palo, California</li>
                        </ul>
                        <div class="btn-box"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Coming Soon -->
    <section class="coming-soon-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="12/10/2021"></div></div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->

    <!-- About Section -->
    <section class="about-section">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">ABOUT EVENT</span>
                            <h2>Welcome to the World Digital Conference 2020</h2>
                            <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</div>
                        </div>
                        <ul class="list-style-one">
                            <li>Multiple Announcements during the event.</li>
                            <li>Logo & company details on the WordCamp.</li>
                            <li>Dedicated blog post thanking each Gold.</li>
                            <li>Acknowledgment and opening and closing.</li>
                        </ul>
                        <div class="btn-box"><a href="contact.html" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a></div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn"><img src="{{ asset('assets/images/resource/about-img-1.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Features Section Two -->
    <section class="features-section-two">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon twist-line-1 wow zoomIn"></span>
                <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
                <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
            </div>

            <div class="row">
                <!-- Title Block -->
                <div class="title-block col-lg-4 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="sec-title">
                            <span class="title">Features</span>
                            <h2>Our Feature</h2>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                        <h4><a href="about.html">Great Speakers</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-search"></span></div>
                        <h4><a href="about.html">Experience</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                        <h4><a href="about.html">Networking</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-success"></span></div>
                        <h4><a href="about.html">Party</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-employee"></span></div>
                        <h4><a href="about.html">New People</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Section -->

    <!-- Speakers Section -->
    <section class="speakers-section" style="background-image: url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <span class="title">Speakers</span>
                <h2>Todays Performers</h2>
            </div>

            <div class="row">
                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-1.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Dale Marke</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-2.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Natisha Decoux</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-3.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Adolfo Plahs</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-4.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Mitchell Heggestad</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-5.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Kenyetta Lesley</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-6.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Shelly Verghese</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-7.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Cassandra Kopka</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('assets/images/resource/speaker-8.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Eugene Clumpner</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Speakers Section -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <span class="icon icon_headphones"></span>
                            <span class="count-text" data-speed="3000" data-stop="190">0</span>
                            <h4 class="counter-title">Participants</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <span class="icon icon_ribbon_alt"></span>
                            <span class="count-text" data-speed="3000" data-stop="62">0</span>
                            <h4 class="counter-title">Awards Win</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <span class="icon icon_like"></span>
                            <span class="count-text" data-speed="3000" data-stop="54">0</span>
                            <h4 class="counter-title">Certified Teachers</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <span class="icon icon_book_alt"></span>
                            <span class="count-text" data-speed="3000" data-stop="38">0</span>
                            <h4 class="counter-title">Courses</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- schedule Section -->
    <section class="schedule-section">
        <div class="anim-icons">
            <span class="icon icon-circle-4 wow zoomIn"></span>
            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">About Conference</span>
                <h2>Schedule Plan</h2>
            </div>

            <div class="schedule-tabs tabs-box">
                <div class="btns-box">
                    <!--Tabs Box-->
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <span class="day">Day 01</span>
                            <span class="date">01</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-2">
                            <span class="day">Day 02</span>
                            <span class="date">02</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-3">
                            <span class="day">Day 03</span>
                            <span class="date">03</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-4">
                            <span class="day">Day 04</span>
                            <span class="date">04</span>
                            <span class="month">Jan</span> 2020
                        </li>
                    </ul>
                </div>

                <div class="tabs-content">

                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM <br> 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM <br> 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM <br> 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM <br> 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM <br> 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM <br> 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM <br> 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM <br> 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM <br> 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-4">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM <br> 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM <br> 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM <br> 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block even">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM <br> 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End schedule Section -->

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="anim-icons">
            <span class="icon icon-circle-green wow fadeIn"></span>
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-circle-pink wow fadeIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get Ticket</span>
                <h2>Choose a Ticket</h2>
            </div>

            <div class="outer-box">
                <div class="row">
                    <!-- Pricing Block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><span class="icon flaticon-paper-plane"></span></div>
                            </div>
                            <div class="price-box">
                                <div class="title"> Day Pass</div>
                                <h4 class="price">$35.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference Tickets</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="false">Easy Access</li>
                                <li class="false">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><span class="icon flaticon-diamond-1"></span></div>
                            </div>
                            <div class="price-box">
                                <div class="title">Full Pass</div>
                                <h4 class="price">$99.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference Tickets</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="true">Easy Access</li>
                                <li class="false">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><span class="icon flaticon-rocket-ship"></span></div>
                            </div>
                            <div class="price-box">
                                <div class="title">Group Pass</div>
                                <h4 class="price">$199.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference Tickets</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="true">Easy Access</li>
                                <li class="true">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

    <!-- Video Section -->
    <section class="video-section" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">WE’RE A LEADING INDUSTRY COMPANY</div>
                <h2>We Are Always at The <br>Forefront of The Business Conference !</h2>
                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span class="ripple"></span></a>
            </div>
        </div>
    </section>
    <!--End Video Section -->

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">JOIN THE EVENT</span>
                            <h2>Why Choose Eventrox?</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et dolore magna aliqu enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip</div>
                        </div>
                        <ul class="list-style-one">
                            <li>High Quality Education</li>
                            <li>You can learn anything</li>
                            <li>We list your options by state</li>
                            <li>Expert-created content and resources</li>
                        </ul>
                        <div class="btn-box">
                            <a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Get Tickets</span></a>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('assets/images/background/3.jpg') }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="anim-icons">
            <span class="icon icon-dots-3 wow zoomIn"></span>
            <span class="icon icon-circle-blue wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">Clients</span>
                <h2>Offcial Sponsors</h2>
            </div>

            <div class="sponsors-outer">
                <h3>Platinum Sponsors</h3>
                <div class="row">
                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt=""></a></figure>
                    </div>
                </div>
            </div>

            <div class="sponsors-outer">
                <h3>Gold Sponsors</h3>

                <div class="row">
                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/6.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/7.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/8.png') }}" alt=""></a></figure>
                    </div>
                </div>
            </div>

            <div class="sponsors-outer">
                <h3>Silver Sponsors</h3>

                <div class="row">
                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/9.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/10.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/11.png') }}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/12.png') }}" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Register Section -->
    <section class="register-section">
        <div class="auto-container">
            <div class="anim-icons full-width">
                <span class="icon icon-circle-3 wow zoomIn"></span>
            </div>
            <div class="outer-box">
                <div class="row no-gutters">
                    <div class="title-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="sec-title light">
                                <div class="icon-box"><span class="icon flaticon-rocket-ship"></span></div>
                                <h2>REGISTER NOW</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et dolore magna.</div>
                            </div>
                        </div>
                    </div>
                    <!--Register Form-->
                    <div class="register-form col-lg-8 col-md-6 col-sm-12">
                        <div class="form-inner">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <span class="icon fa fa-user"></span>
                                    <input type="text" name="username" placeholder="Full name" required="">
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-envelope"></span>
                                    <input type="email" name="email" value="" placeholder="Email address" required>
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-phone"></span>
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-edit"></span>
                                    <textarea name="message" placeholder="Additional Message"></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Register Now</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Register Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="anim-icons">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn"></span>
            <span class="icon twist-line-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Blogs</span>
                <h2>Latest News</h2>
            </div>

            <div class="row">

                <!-- News Block Three -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="far fa-user"></span> Admin</li>
                                <li><span class="far fa-comments"></span> Comment 03</li>
                            </ul>
                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>
                            <div class="btn-box"><a href="#" class="read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="far fa-user"></span> Admin</li>
                                <li><span class="far fa-comments"></span> Comment 03</li>
                            </ul>
                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>
                            <div class="btn-box"><a href="#" class="read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="far fa-user"></span> Admin</li>
                                <li><span class="far fa-comments"></span> Comment 03</li>
                            </ul>
                            <h4><a href="blog-single.html">International Conference on Art Business</a></h4>
                            <div class="btn-box"><a href="#" class="read-more">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        <p>We have very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different sectors, mainly in Europe and other countries.</p>
                                    </div>
                                    <ul class="social-icon-one social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget useful-links">
                                    <h2 class="widget-title">Useful Links</h2>
                                    <ul class="user-links">
                                        <li><a href="index-2.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="projects.html">Projects</a></li>
                                        <li><a href="blog.html">Blogs</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-clock"></span>
                                                <div class="text">Mon - Fri: 09:00 - 18:00</div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-phone"></span>
                                                <div class="text"><a href="tel:+1-345-5678-77">+1-345-5678-77</a></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-paper-plane"></span>
                                                <div class="text"><a href="mailto:support@example.com">support@example.com</a></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-worldwide"></span>
                                                <div class="text">13005 Greenville Avenue<br> California, TX 70240</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget instagram-widget">
                                    <h2 class="widget-title">Instagram Gallery</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            <figure class="image">
                                                <a href="{{ asset('assets/images/gallery/1.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('assets/images/resource/gw-1.jpg') }}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{ asset('assets/images/gallery/2.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('assets/images/resource/gw-2.jpg') }}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{ asset('assets/images/gallery/3.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('assets/images/resource/gw-3.jpg') }}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{ asset('assets/images/gallery/4.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('assets/images/resource/gw-4.jpg') }}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{ asset('assets/images/gallery/5.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('assets/images/resource/gw-5.jpg') }}" alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="{{ asset('assets/images/gallery/1.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('assets/images/resource/gw-6.jpg') }}" alt=""></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="copyright-text">
                        <p>© Copyright 2020 All Rights Reserved by <a href="index.html">Expert-Themes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Demo</h6>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now</a>
</div><!-- End Color Switcher -->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Seo</a></li>
                <li><a href="#">Bussiness</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Digital</a></li>
                <li><a href="#">Conferance</a></li>
            </ul>

        </div>
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src={{ asset('assets/js/jquery.js') }}"></script>
<script src={{ asset('assets/js/popper.min.js') }}"></script>
<script src={{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src={{ asset('assets/js/jquery-ui.js') }}"></script>
<script src={{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src={{ asset('assets/js/appear.js') }}"></script>
<script src={{ asset('assets/js/owl.js') }}"></script>
<script src={{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src={{ asset('assets/js/wow.js') }}"></script>
<script src={{ asset('assets/js/script.js') }}"></script>
<!-- Color Setting -->
<script src={{ asset('assets/js/color-settings.js') }}"></script>
</body>
</html>