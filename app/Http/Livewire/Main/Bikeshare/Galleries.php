<?php

namespace App\Http\Livewire\Main\Bikeshare;

use Livewire\Component;
use App\Models\BsGallery;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Galleries extends Component
{
    use WithFileUploads;
    
    public $bikeshare, $galleries, $photo, $description, $galleryId;

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
        $this->galleries = $this->bikeshare->bs_galleries;
    }

    public function photo()
    {
        return $this->photo ? $this->photo->temporaryUrl() : asset('storage/img/image-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();

        $bikeshare = $this->bikeshare;

        if($this->photo) {
            $gallery = $bikeshare->bs_galleries()->create([
                'photo' => $this->photo->store('images/bikeshare/gallery', 'public'),
                'description' => $this->description
            ]);
            // $gallery->photo = $this->photo->store('images/bikeshare/gallery', 'public');
        }
        else {
            $gallery = $bikeshare->bs_galleries()->create([
                'description' => $this->description
            ]);
        }

        session()->flash('success', 'Photo uploaded');
        $this->reset();
        // $this->emitSelf('photoUploaded');
        return redirect()->route('manager.bikeshare.gallery.index', $bikeshare);
    }

    public function loadModal($id)
    {
        $this->galleryId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $gallery = BsGallery::find($this->galleryId);
        
        if(Storage::disk('public')->exists($gallery->photo)) {
            unlink("storage/".$gallery->photo);
        }

        $gallery->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.bikeshare.gallery.index', $gallery->bike_share);
    }

    public function cancel()
    {
        $this->dispatchBrowserEvent('closeModal');
    }

    public function render()
    {
        return view('livewire.main.bikeshare.galleries');
    }
}
