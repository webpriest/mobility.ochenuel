<x-front-layout title="Speakers">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>Speakers</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Speakers</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-sidebar">
                        <livewire:front.page.speakers />
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