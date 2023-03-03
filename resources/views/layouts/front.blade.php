<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>{{ config('app.name', 'Ochenuel Mobility') }}</title>

        <link rel="icon" href="{{ asset('storage/images/favicon.png') }}">

        <!-- Stylesheets -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet">
        <!--Color Switcher Mockup-->
        <link href="{{ asset('assets/css/color-switcher-design.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

        <link rel="icon" href="{{ asset('storage/images/favicon.png') }}" type="image/x-icon">
        @livewireStyles
    </head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
 	<!-- Header span -->

    <!-- Header Span -->
    <span class="header-span style-two"></span>

    <!-- Main Header-->
    <header class="main-header header-style-two alternate">

		<div class="header-top">
			<div class="auto-container">
				<div class="clearfix">

					<div class="top-left pull-left">
						<div class="text">info@ochenuel.com.ng</div>
					</div>

					<div class="pull-right">
						<ul class="social-links">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
						</ul>

						<a href="#" class="theme-btn register-btn">Join Us</a>
					</div>
				</div>
			</div>
		</div>

        <div class="main-box">
            <div class="auto-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.png') }}" alt="" title=""></a></div>
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
                                <li class="current"><a href="#">Home</a></li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="#">Who We Are</a></li>
                                        <li><a href="#">Vision & Mission</a></li>
                                        <li><a href="#">Administrative Structure</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Expertise</a>
                                    <ul>
                                        <li><a href="#">Cycling & Walking</a></li>
                                        <li><a href="#">Training and Education</a></li>
                                        <li><a href="#">Intelligent Transport System</a></li>
                                        <li><a href="#">Public Transport</a></li>
                                        <li><a href="#">Transport Safety</a></li>
                                        <li><a href="#">Climate and Sustainability</a></li>
                                        <li><a href="#">Transport & Traffic Engineering</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Bike Share</a></li>
                                <li class="dropdown"><a href="#">SUMCourse</a></li>
                                <li><a href="#">OpenStreets</a></li>
                                <li class="dropdown"><a href="#">Resources</a>
                                    <ul>
                                        <li><a href="#">News Articles</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Publications</a></li>
                                        <li><a href="#">+ More Resources</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer box -->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-btn"><span class="flaticon-search"></span></div>

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Register Now</span></a>
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
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.png') }}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

	<!-- Banner Section Two -->
	{{ $slot }}

    <!-- Main Footer -->
    <footer class="main-footer style-three">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <!-- Footer Content -->
            <div class="footer-content">
                <div class="footer-logo"><a href="#"><img src="{{ asset('storage/images/logo-2.png') }}" alt=""></a></div>
                <ul class="footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <div class="copyright-text">© Copyright 2020 All Rights Reserved by <a href="index.html">Expert-Themes</a></div>
                <ul class="social-icon-one">
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
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
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<!-- Color Setting -->
<script src="{{ asset('assets/js/color-settings.js') }}"></script>
@livewireScripts
</body>
</html>