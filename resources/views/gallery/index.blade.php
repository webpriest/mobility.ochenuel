<x-front-layout title="Gallery">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>Gallery</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </section>

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">SUMCOURSE & OpenStreets</span>
                <h2>Photo Gallery</h2>
            </div>

            <livewire:front.page.gallery.index />

        </div>
    </section>
</x-front-layout>