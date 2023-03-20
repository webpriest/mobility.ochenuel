<x-contactus-layout title="Contact Us">
    <!--Page Title-->
    <section class="page-title" style="background-image:url(storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <p><strong>No. 661, Mohammed Alkali Street</strong></p>
                                <p>Apo Resettlement</p>
                                <p>Abuja, Nigeria 900001</p>
                            </li>

                            <li>
                                <span class="icon fa fa-phone-volume"></span>
                                <p><strong>Call Us</strong></p>
                                <p>+234 805 5994 943</p>
                                <p>+234 818 6194 943</p>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p><a href="mailto:info@ochenuel.com.ng">info@ochenuel.com.ng</a></p>
                            </li>
                        </ul>

                        <ul class="social-icon-two social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Let's get your thoughts</h2>
                            </div>
                            <livewire:contact.contact-form />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.887223524744!2d7.497108814255795!3d8.982524192189679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0d2665747489%3A0x332154e90361cdb3!2sApo%20Resettlement!5e0!3m2!1sen!2sng!4v1678975921333!5m2!1sen!2sng" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</x-contactus-layout>