<x-front-layout title="SUMCOURSE Registration">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>SUMCOURSE Registration</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Registration</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-side col-md-12 col-sm-12">
                    <div class="blog-sidebar">
                        <livewire:front.page.sumcourse.register />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>