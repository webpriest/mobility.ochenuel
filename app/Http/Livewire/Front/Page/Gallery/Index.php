<?php

namespace App\Http\Livewire\Front\Page\Gallery;

use Livewire\Component;
use App\Models\OsGallery;
use App\Models\ScGallery;

class Index extends Component
{
    public $sc_galleries, $os_galleries, $galleries;

    public function mount()
    {
        $galleries = collect();
        ScGallery::latest()->get()->map(function($gallery) use ($galleries) {
            $data = [
                'id' => $gallery->id,
                'photo' => $gallery->photo,
                'description' => $gallery->description
            ];
            return $galleries->push($data);
        });
        OsGallery::latest()->get()->map(function($gallery) use ($galleries) {
            $data = [
                'id' => $gallery->id,
                'photo' => $gallery->photo,
                'description' => $gallery->description
            ];
            return $galleries->push($data);
        });
        $this->galleries = array_slice($galleries->toArray(), 0, 12, true);
    }

    public function render()
    {
        return view('livewire.front.page.gallery.index');
    }
}
