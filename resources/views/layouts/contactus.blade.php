<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>@isset($title){{ $title }} -@endisset Ochenuel</title>

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

        @livewireStyles
        @vite(['resources/js/app.js'])
    </head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}
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

        @include('layouts.partials._navigation')

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
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo-white.png') }}" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        <p>Ochenuel Mobility is a multi modal sustainable transport initiative covering road, rail, tram, cable, inland waterways transportation syatems.</p>
                                    </div>
                                    <ul class="social-icon-one social-icon-colored">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget useful-links">
                                    <h2 class="widget-title">Core Expertise</h2>
                                    <ul class="user-links">
                                        <li><a href="#">Transport & Traffic Engineering</a></li>
                                        <li><a href="#">Bike Share</a></li>
                                        <li><a href="#">Training & Education</a></li>
                                        <li><a href="#">Public Transport</a></li>
                                        <li><a href="#">ITS</a></li>
                                        <li><a href="#">Transport Safety</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-phone"></span>
                                                <div class="text"><a href="tel:+234 805 5994 943">+234 805 5994 943</a></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-paper-plane"></span>
                                                <div class="text"><a href="mailto:info@ochenuel.com.ng">info@ochenuel.com.ng</a></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-worldwide"></span>
                                                <div class="text">No. 661, Mohammed Alkali Street,<br>Zone B, New Garki Town,<br>Apo Resettlement,<br>
                                                    Abuja, Nigeria</div>
                                            </li>
                                        </ul>
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
                        <p>© {{ date('Y') }} Ochenuel Mobility. All Rights Reserved</p>
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