<?php

namespace App\Http\Livewire\Main\Openstreetevent;

use Livewire\Component;
use App\Models\OsGallery;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Gallery extends Component
{
    use WithFileUploads;
    
    public $openstreetevent, $galleries, $photo, $description, $galleryId;

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
        $this->galleries = $this->openstreetevent->os_galleries;
    }

    public function photo()
    {
        return $this->photo ? $this->photo->temporaryUrl() : asset('storage/img/image-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();

        $openstreetevent = $this->openstreetevent;
       if($this->photo) {
            $gallery = $openstreetevent->os_galleries()->create([
                'photo' => $this->photo->store('images/openstreet/events/gallery', 'public'),
                'description' => $this->description
            ]);
        }
        else {
            $gallery = $openstreetevent->os_galleries()->create([
                'description' => $this->description
            ]);
        }

        session()->flash('success', 'Photo uploaded');
        $this->reset();

        return redirect()->route('manager.openstreet.gallery.index', $openstreetevent);
    }

    public function loadModal($id)
    {
        $this->galleryId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $gallery = OsGallery::find($this->galleryId);
        
        if(Storage::disk('public')->exists($gallery->photo)) {
            unlink("storage/".$gallery->photo);
        }

        $gallery->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.openstreet.gallery.index', $gallery->open_street_event);
    }

    public function cancel()
    {
        $this->dispatchBrowserEvent('closeModal');
    }
    
    public function render()
    {
        return view('livewire.main.openstreetevent.gallery');
    }
}
