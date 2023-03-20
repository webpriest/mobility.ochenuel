<form wire:submit.prevent="store" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label" for="theme">Theme</label>
        <input type="text" wire:model.defer="theme" class="form-control" id="theme" placeholder="SUMCourse theme">
        @error('theme')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label" for="sub_theme">Sub Theme</label>
        <input type="text" wire:model.defer="sub_theme" class="form-control" id="sub_theme" placeholder="Sub Theme (if any)">
        @error('sub_theme')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label" for="address">Address/Venue</label>
        <input type="text" wire:model.defer="address" class="form-control" id="address" placeholder="Location of event">
        @error('address')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="mb-3">
                <label class="form-label" for="city">City</label>
                <input type="text" wire:model.defer="city" class="form-control" id="city" placeholder="City">
                @error('city')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="country_id">Country</label><br>
                <select wire:model.defer="country_id" style="width: 100%" id="country_id">
                    <option value="">Choose</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                    @endforeach
                </select>
                @error('country_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3" wire:ignore>
                        <label class="form-label" for="event_date">Date of event</label>
                        <input type="text" wire:model.lazy="event_date" class="form-control" id="event_date" placeholder="Date" autocomplete="off">
                        @error('event_date')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Time of event (24H)</label>
                        <div class="d-flex">
                            <input type="text" wire:model.defer="hour" class="form-control input-mask" placeholder="HH" maxlength="2">
                            <input type="text" wire:model.defer="minute" class="form-control input-mask" placeholder="MM" maxlength="2">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label" for="days"># of days</label>
                        <input type="number" wire:model.defer="days" class="form-control" id="days" maxlength="2" placeholder="Days">
                        @error('days')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="" wire:ignore>
                <label class="form-label" for="badge">Upload event badge</label>
                <input type="file" wire:model.defer="badge" class="dropify" data-allowed-file-extensions="jpeg jpg png webp" />
                @error('badge')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex flex-wrap gap-3 mt-3">
                <button type="submit" class="btn btn-primary  waves-effect waves-light">Submit <i class="uil uil-arrow-right ms-2"></i></button>
            </div>
        </div>
    </div>
</form>