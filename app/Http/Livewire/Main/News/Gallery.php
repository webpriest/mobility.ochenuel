<?php

namespace App\Http\Livewire\Main\News;

use Livewire\Component;
use App\Models\NewsGallery;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Gallery extends Component
{
    use WithFileUploads;
    
    public $post, $galleries, $photo, $description, $galleryId;

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
        $this->galleries = $this->post->news_galleries;
    }

    public function photo()
    {
        return $this->photo ? $this->photo->temporaryUrl() : asset('storage/img/image-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();

        $post = $this->post;
       if($this->photo) {
            $gallery = $post->news_galleries()->create([
                'photo' => $this->photo->store('images/news/gallery', 'public'),
                'description' => $this->description
            ]);
        }
        else {
            $gallery = $post->news_galleries()->create([
                'description' => $this->description
            ]);
        }

        session()->flash('success', 'Photo uploaded');
        $this->reset();
        // $this->emitSelf('photoUploaded');
        return redirect()->route('manager.news.gallery.index', $post);
    }

    public function loadModal($id)
    {
        $this->galleryId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $gallery = NewsGallery::find($this->galleryId);
        
        if(Storage::disk('public')->exists($gallery->photo)) {
            unlink("storage/".$gallery->photo);
        }

        $gallery->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.news.gallery.index', $gallery->news_post);
    }

    public function cancel()
    {
        $this->dispatchBrowserEvent('closeModal');
    }
    
    public function render()
    {
        return view('livewire.main.news.gallery');
    }
}
