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

                    <a href="#" class="theme-btn register-btn">Join Us</a>
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
                            <li><a href="#">SUMCourse</a></li>
                            <li><a href="#">OpenStreets</a></li>
                            <li class="dropdown"><a href="#">Resources</a>
                                <ul>
                                    <li><a href="#">News Articles</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Publications</a></li>
                                    <li><a href="#">+ More Resources</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Outer box -->
                <div class="outer-box">
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