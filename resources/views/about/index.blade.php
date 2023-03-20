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
                        <!-- News Block Three -->
                        
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