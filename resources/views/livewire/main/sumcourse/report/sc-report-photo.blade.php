<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="photo">
                    <img src="{{ $this->cover() }}" width="100%" style="cursor: pointer;" alt="upload photo">
                </label>
                <input type="file" name="photo" id="photo" class="sr-only" wire:model="photo">
                @error('photo')
                    <span class="error">{{ $message }}</span>
                @enderror
                <div>
                    <label class="form-label">Click to select a photo</label>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Upload <i class="uil uil-cloud-upload ms-2"></i></button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if($cover_photo)
                <h4 class="card-title">Cover photo</h4>
                
                <div class="popup-gallery">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="mt-4">
                                <div class="img-fluid">
                                    <img src="{{ $report->photo() }}" alt="report cover" class="img-fluid d-block">
                                </div>
                            </div>
                        </div>
                                                    
                    </div>
                </div>
                @else
                    <p class="alert alert-warning">No photo</p>
                @endif
            </div>
        </div>
    </div>
</div>