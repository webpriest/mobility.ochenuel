<div class="row">
    <div class="col-lg-6">
        <form wire:submit.prevent="upload" enctype="multipart/form-data">
            <div class="card">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4" wire:ignore>
                        <label for="doc" style="cursor: pointer;">
                            <img class="card-img img-fluid" src="{{ asset('storage/img/pdf-upload-bg.webp') }}" alt="PDF">
                        </label>
                        <input type="file" name="pdf" wire:model="pdf" id="doc" class="sr-only" accept="application/pdf">
                        <input type="hidden" wire:model.defer="lecture_id">
                    </div><!-- end col-->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Add Lecture Document (PDF)</h5>
                            <p class="card-text">Click to add a new lecture file for <strong>{{ $lecture->sc_event->theme }}</strong></p>
                            @if($pdf)
                            <p class="card-text">
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">
                                    <i class="icofont-upload-alt"></i>
                                    Upload
                                </button>
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if($docs)
        @foreach($docs as $doc)
        <div class="col-lg-6">
            <div class="card">
                <a href="{{ route('manager.sumcourse.lecturedoc.preview', $doc) }}">
                <div class="row g-0 align-items-center">
                        <div class="col-md-4">
                            <img class="card-img img-fluid" src="{{ asset('storage/img/pdf-attached.webp') }}" alt="PDF">
                        </div><!-- end col-->
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $doc->filename }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $doc->size() }}</small></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    @endif
</div>