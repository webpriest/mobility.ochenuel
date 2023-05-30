<div>
    @push('styles')
        
    @endpush
    @include('layouts.partials._notification')
    <div class="row">
        <div class="col-lg-4">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="photo">
                        @if($pdf)
                        <img src="{{ $this->myPdf() }}" width="100%" style="cursor: pointer;" alt="upload photo">
                        @else
                        <img src="{{ $this->photo() }}" width="100%" style="cursor: pointer;" alt="upload photo">
                        @endif
                    </label>
                    <input type="file" name="pdf" id="photo" class="sr-only" wire:model="pdf" accept="application/pdf">
                    @error('photo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <div>
                        <label class="form-label">Click to select report</label>
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label" for="sc_event_id">SUMCourse Event</label>
                    <select wire:model.defer="sc_event_id" id="sc_event_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach($sumcourses as $sumcourse)
                            <option value="{{ $sumcourse->id }}">{{ $sumcourse->theme }}</option>
                        @endforeach
                    </select>
                    @error('sc_event_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    <label class="form-label" for="title">Report title</label>
                    <input type="text" wire:model.defer="title" class="form-control" id="title" placeholder="Describe file">
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Upload <i class="uil uil-cloud-upload ms-2"></i></button>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    @if($reports)
                    <h4 class="card-title">List of reports</h4>
                    
                    <div class="popup-gallery">
                        <div class="row">
                            @foreach($reports as $report)
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <div class="img-fluid">
                                        <a href="{{ route('manager.sumcourse.report.show', $report) }}">
                                        <img src="{{ $report->cover_image ? asset('storage/'.$report->cover_image) : asset('storage/img/pdf-attached.webp') }}" alt="SUMCourse report" class="img-fluid d-block">
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-2 text-center">
                                    <h4>{{ $report->title }}</h4>
                                    <a href="javascript:void(0)" class="px-3 text-danger" wire:click="loadModal({{ $report->id }})"><i class="uil uil-trash-alt font-size-18"></i> Delete</a>
                                </div>
                            </div>
                            @endforeach                        
                        </div>
                    </div>
                    @else
                        <p class="alert alert-warning">No report</p>
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
                            <p>Are you sure you want to delete this file?</p>
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
    @push('scripts')

    @endpush
</div>
