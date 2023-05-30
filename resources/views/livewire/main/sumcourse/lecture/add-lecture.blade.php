<form wire:submit.prevent="store" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label" for="topic">Topic</label>
        <input type="text" wire:model.defer="topic" class="form-control" id="topic" placeholder="Lecture topic">
        @error('topic')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label" for="speaker_id">Speaker</label><br>
                <select wire:model.defer="speaker_id" style="width: 100%" class="form-select" id="speaker_id">
                    <option value="">Choose</option>
                    @foreach($speakers as $speaker)
                        <option value="{{ $speaker->id }}">{{ $speaker->name }}</option>
                    @endforeach
                </select>
                @error('speaker_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <input type="hidden" wire:model.defer="sc_event_id">
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label" for="lecture_day">What day of lecture?</label>
                <input type="number" wire:model.defer="lecture_day" class="form-control" id="lecture_day" placeholder="e.g 2">
                @error('lecture_day')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
       
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label" for="lecture_session">Lecture session</label>
                <input type="text" wire:model.defer="lecture_session" class="form-control" id="lecture_session" placeholder="e.g morning, afternoon">
                @error('lecture_session')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="d-flex flex-wrap gap-3 mt-3">
                <button type="submit" class="btn btn-primary  waves-effect waves-light">Submit <i class="uil uil-arrow-right ms-2"></i></button>
            </div>
        </div>
    </div>
</form>