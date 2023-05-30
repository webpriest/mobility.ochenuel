<header class="main-header header-style-two @if(Route::is('home')) alternate @endif">

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

                    <a href="{{ route('registration.index') }}" class="theme-btn register-btn">Join Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-box">
        <div class="auto-container clearfix">
            <div class="logo-box">
                <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.png') }}" alt="Ochenuel"></a></div>
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
                            <li class="{{ Route::is('home') ? 'current' : ''}}"><a href="{{ route('home') }}">Home</a></li>
                            <li class="dropdown {{ Route::is('about.*') ? 'current' : ''}}"><a href="javascript:void(0)">About</a>
                                <ul>
                                    <li><a href="{{ route('about.index') }}">Who We Are</a></li>
                                    <li><a href="{{ route('about.vision') }}">Vision & Mission</a></li>
                                    <li><a href="{{ route('about.administration') }}">Administrative Structure</a></li>
                                </ul>
                            </li>
                            <livewire:front.navigation.expert />
                            <li class="{{ Route::is('bikeshare.index') ? 'current' : ''}}"><a href="{{ route('bikeshare.index') }}">Bike Share</a></li>
                            <li class="{{ Route::is('sumcourse.*') ? 'current' : ''}}"><a href="{{ route('sumcourse.index') }}">SUMCourse</a></li>
                            <li class="{{ Route::is('openstreet.*') ? 'current' : ''}}"><a href="{{ route('openstreet.index') }}">OpenStreets</a></li>
                            <li class="dropdown"><a href="#">Resources</a>
                                <ul>
                                    <li><a href="{{ route('news.index') }}">News Articles</a></li>
                                    <li><a href="{{ route('gallery.index') }}">Gallery</a></li>
                                    <li><a href="#">Publications</a></li>
                                    <li><a href="#">+ More Resources</a></li>
                                </ul>
                            </li>
                            <li class="{{ Route::is('contact.index') ? 'current' : ''}}"><a href="{{ route('contact.index') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Outer box -->
                <div class="outer-box">
                    <!-- Button Box -->
                    <div class="btn-box">
                        <a href="{{ route('registration.index') }}" class="theme-btn btn-style-one"><span class="btn-title">Register Now</span></a>
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