<?php

namespace App\Http\Livewire\Main\Sumcourse;

use Livewire\Component;
use App\Models\ScFlyer;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Flyer extends Component
{
    use WithFileUploads;
    
    public $sumcourse, $flyer, $photo, $description, $flyerId;

    protected $listeners = [
        'photoUploaded' => '$refresh'
    ];

    protected $rules = [
        'description' => ['required'],
        'photo' => ['required']
    ];

    public function messages()
    {
        return [
            'description.required' => 'Give the photo a caption',
            'photo.required' => 'Upload a photo'
        ];
    }

    public function mount()
    {
        $this->flyer = $this->sumcourse->sc_flyer;
    }

    public function photo()
    {
        return $this->photo ? $this->photo->temporaryUrl() : asset('storage/img/image-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();

        $sumcourse = $this->sumcourse;
       if($this->photo) {
            $gallery = $sumcourse->sc_flyer()->create([
                'filename' => $this->photo->store('images/sumcourse/flyer', 'public'),
                'description' => $this->description
            ]);
        }
        else {
            $gallery = $sumcourse->sc_flyer()->create([
                'description' => $this->description
            ]);
        }

        session()->flash('success', 'Photo uploaded');
        $this->reset();

        return redirect()->route('manager.sumcourse.flyer.index', $sumcourse);
    }

    public function loadModal($id)
    {
        $this->flyerId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $flyer = ScFlyer::find($this->flyerId);
        
        if(Storage::disk('public')->exists($flyer->filename)) {
            unlink("storage/".$flyer->filename);
        }

        $flyer->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.sumcourse.flyer.index', $flyer->sc_event);
    }

    public function cancel()
    {
        $this->dispatchBrowserEvent('closeModal');
    }
    
    public function render()
    {
        return view('livewire.main.sumcourse.flyer');
    }
}
