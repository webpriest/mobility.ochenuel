<section class="gallery-section style-two mb-40">
    @if($galleries->isNotEmpty())
    <div class="gallery-carousel owl-carousel owl-theme">
        @foreach($galleries as $gallery)
        <div class="gallery-item">
            <div class="image-box">
                <figure class="image">
                    <img src="{{ $gallery->photo() }}" alt="{{ $gallery->description }}">
                    <figcaption>{{ $gallery->description }}</figcaption>
                </figure>
                <div class="overlay-box"><a href="{{ $gallery->photo() }}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</section>