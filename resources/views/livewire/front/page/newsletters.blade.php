<section class="newsletter-section">
    <div class="anim-icons full-width">
        <span class="icon icon-shape-3 wow fadeIn"></span>
        <span class="icon icon-line-1 wow fadeIn"></span>
    </div>
    <div class="auto-container">
        <!--Subscribe Form-->
        <div class="subscribe-form wow fadeInUp" data-wow-delay="500ms">
            <div class="envelope-image"></div>
            <div class="form-inner">
                <div class="upper-box">
                    <div class="sec-title text-center">
                        <div class="icon-box"><span class="fa fa-envelope"></span></div>
                        <h2>Subscribe to our newsletter</h2>
                        <div class="text">Stay informed with our programmes and events.</div>
                    </div>
                </div>
                @if(!$added)
                    <form wire:submit.prevent="store">
                        <div class="form-group">
                            <input type="email" wire:model.defer="email" placeholder="Your email" required>
                            <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                @else
                    <p class="alert alert-success">Thanks for subscribing to our newsletter. We'll be in touch.</p>
                @endif
            </div>
        </div>
    </div>
</section>