<div>
    @include('layouts.partials._notification')
    <div class="row">
        <div class="col-lg-4">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="logo">
                        <img src="{{ $this->logo() }}" width="100%" style="cursor: pointer;" alt="upload logo">
                    </label>
                    <input type="file" name="logo" id="logo" class="sr-only" wire:model="logo">
                    @error('logo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <div>
                        <label class="form-label">Click to select a logo</label>
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label" for="name">Name of Partner</label>
                    <input type="text" wire:model.defer="name" class="form-control" id="name" placeholder="Name">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mt-3">
                    <label class="form-label" for="url">Website URL <em>(optional)</em></label>
                    <input type="text" wire:model.defer="url" class="form-control" id="url" placeholder="url">
                    @error('url')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add Partner <i class="uil uil-cloud-upload ms-2"></i></button>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @if($partners)
                    <h4 class="card-title">Partners</h4>
                    
                    <div class="popup-gallery">
                        <div class="row">
                            @foreach($partners as $partner)
                            <div class="col-md-6 col-6">
                                <div class="mt-4">
                                    <div class="img-fluid">
                                        <img src="{{ $partner->logo() }}" alt="Partner" class="img-fluid d-block">
                                    </div>
                                </div>
                                <div class="mt-2 text-center">
                                    <a href="javascript:void(0)" class="px-3 text-danger" wire:click="loadModal({{ $partner->id }})"><i class="uil uil-trash-alt font-size-18"></i> Delete</a>
                                </div>
                            </div>
                            @endforeach
                                                        
                        </div>
                    </div>
                    @else
                        <p class="alert alert-warning">No partner</p>
                    @endif
                </div>
            </div>

            <div class="modal fade deleteFile" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mySmallModalLabel">Delete</h5>
                            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="uil-times font-size-18"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this partner?</p>
                            <div class="mt-3">
                                <button type="button" class="btn btn-danger delete waves-effect waves-light" wire:click="delete">
                                    <span wire:loading.remove wire:target="delete" class="block">
                                        <i class="uil uil-exclamation-octagon me-2"></i> Delete
                                    </span>
                                    <span wire:loading wire:target="delete">Please wait...</span>
                                </button>
                                <button type="button" class="btn btn-primary info waves-effect waves-light" wire:click="cancel">
                                    <span wire:loading.remove wire:target="cancel" class="block">
                                        Cancel <i class="uil uil-ban ms-2"></i>
                                    </span>
                                    <span wire:loading wire:target="cancel">Please wait...</span>
                                </button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div>
    </div>
</div>