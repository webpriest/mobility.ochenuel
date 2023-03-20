<form wire:submit.prevent="store" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label" for="title">Title</label>
        <input type="text" wire:model.defer="title" class="form-control" id="title" placeholder="OpenStreet title">
        @error('title')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label" for="location">Venue/Location</label>
                <input type="text" wire:model.defer="location" class="form-control" id="location" placeholder="Venue of event">
                @error('location')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3" wire:ignore>
                <label class="form-label" for="os_date">Date of event</label>
                <input type="text" wire:model.lazy="os_date" class="form-control" id="os_date" placeholder="Date" autocomplete="off">
                @error('os_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="mb-3">
                <label class="form-label">Time of event (24H)</label>
                <div class="d-flex">
                    <input type="text" wire:model.defer="hour" class="form-control input-mask" placeholder="HH" maxlength="2">
                    <input type="text" wire:model.defer="minute" class="form-control input-mask" placeholder="MM" maxlength="2">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="" wire:ignore>
                <label class="form-label" for="photo">Upload photo</label>
                <input type="file" wire:model.defer="photo" class="dropify" data-allowed-file-extensions="jpeg jpg png webp" />
                @error('photo')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="d-flex flex-wrap gap-3 mt-3">
                <button type="submit" class="btn btn-primary  waves-effect waves-light">Submit <i class="uil uil-arrow-right ms-2"></i></button>
            </div>
        </div>
    </div>
</form>