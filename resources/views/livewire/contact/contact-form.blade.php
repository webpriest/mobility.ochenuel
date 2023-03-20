<form wire:submit.prevent="store">
    @if($thanks)
        <div class="alert alert-success">
            Thanks for reaching out. We will response as required.
        </div>
    @else
        <div class="row clearfix">
            <div class="col-sm-12 form-group">
                <input type="text" wire:model.defer="name" placeholder="Your name">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="email" wire:model.defer="email" placeholder="E-mail">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                {{-- <input type="text" wire:model.defer="subject" placeholder="Subject"> --}}
                <select wire:model.defer="subject">
                    <option value="">Choose</option>
                    <option value="Inquiry">Inquiry</option>
                    <option value="Complaint">Complaint</option>
                    <option value="Suggestion">Suggestion</option>
                </select>
                @error('subject')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <textarea wire:model.defer="message" placeholder="Your message"></textarea>
                @error('message')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-one" type="submit" style="cursor: pointer"><span class="btn-title">Send</span></button>
            </div>
        </div>
    @endif
</form>