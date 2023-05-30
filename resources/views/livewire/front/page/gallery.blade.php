<div class="row">
    @if($galleries->isNotEmpty())
        @foreach($galleries as $gallery)
        <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
            <div class="image-box">
                <figure class="image">
                    <img src="{{ $gallery->photo() }}" alt="">
                </figure>
                <div class="overlay-box"><a href="{{ $gallery->photo() }}" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>
        @endforeach
    @endif
</div>