<?php

namespace App\Http\Livewire\Main\Sumcourse;

use Livewire\Component;
use App\Models\ScGallery;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Gallery extends Component
{
    use WithFileUploads;
    
    public $sumcourse, $galleries, $photo, $description, $galleryId;

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
        $this->galleries = $this->sumcourse->sc_galleries;
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
            $gallery = $sumcourse->sc_galleries()->create([
                'photo' => $this->photo->store('images/sumcourse/gallery', 'public'),
                'description' => $this->description
            ]);
        }
        else {
            $gallery = $sumcourse->sc_galleries()->create([
                'description' => $this->description
            ]);
        }

        session()->flash('success', 'Photo uploaded');
        $this->reset();
        // $this->emitSelf('photoUploaded');
        return redirect()->route('manager.sumcourse.gallery.index', $sumcourse);
    }

    public function loadModal($id)
    {
        $this->galleryId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $gallery = ScGallery::find($this->galleryId);
        
        if(Storage::disk('public')->exists($gallery->photo)) {
            unlink("storage/".$gallery->photo);
        }

        $gallery->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.sumcourse.gallery.index', $gallery->sc_event);
    }

    public function cancel()
    {
        $this->dispatchBrowserEvent('closeModal');
    }
    
    public function render()
    {
        return view('livewire.main.sumcourse.gallery');
    }
}
