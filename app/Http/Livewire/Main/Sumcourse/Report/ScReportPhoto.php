<?php

namespace App\Http\Livewire\Main\Sumcourse\Report;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ScReportPhoto extends Component
{
    use WithFileUploads;

    public $report, $photo, $cover_photo;

    protected $listeners = [
        'photoUploaded' => '$refresh'
    ];

    protected $rules = [
        'photo' => ['required']
    ];

    public function messages()
    {
        return [
            'photo.required' => 'Upload a photo'
        ];
    }

    public function mount()
    {
        $this->cover_photo = $this->report->cover_image;
    }

    public function cover()
    {
        return $this->photo ? $this->photo->temporaryUrl() : asset('storage/img/image-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();

        $report = $this->report;
        if($this->photo) {
            if($report->cover_image) {
                if(Storage::disk('public')->exists($report->cover_image)) {
                    unlink("storage/".$report->cover_image);
                }
                $report->cover_image = null;
            }
            $report->update([
                'cover_image' => $this->photo->store('images/sumcourse/report', 'public'),
            ]);

            session()->flash('success', 'Photo uploaded');
            $this->reset();
            
            return redirect()->route('manager.sumcourse.report.index');
        }
        session()->flash('error', 'Photo could not be uploaded');

        return redirect()->route('manager.sumcourse.report.index');
    }
    
    public function render()
    {
        return view('livewire.main.sumcourse.report.sc-report-photo');
    }
}
