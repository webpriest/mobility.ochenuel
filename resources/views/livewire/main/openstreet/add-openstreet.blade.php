<form wire:submit.prevent="store" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label" for="title">Title</label>
        <input type="text" wire:model.defer="title" class="form-control" id="title" placeholder="OpenStreet title">
        @error('title')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label" for="sub_title">Sub title</label>
        <input type="text" wire:model.defer="sub_title" class="form-control" id="sub_title" placeholder="Sub title (if any)">
        @error('sub_title')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label" for="content">Content</label>
        <input type="text" wire:model.defer="content" class="form-control" id="content" placeholder="Main content">
        @error('content')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="row">
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