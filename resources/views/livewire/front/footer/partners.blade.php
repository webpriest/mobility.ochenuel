<section class="clients-section-three" style="background-image: url(/storage/images/background/9.jpg);">
    <div class="auto-container">
        <div class="sponsors-outer">
            @if($partners->isNotEmpty())
            <div class="sponsors-carousel owl-carousel owl-theme">
                @foreach ($partners as $partner)
                    <div class="client-block">
                        <figure class="image-box"><a href="{{ $partner->url }}" target="_blank" title="{{ $partner->name }}"><img src="{{ $partner->logo() }}" alt="partner"></a></figure>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>
