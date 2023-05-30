<?php

namespace App\Http\Livewire\Front\Home;

use Livewire\Component;
use App\Models\ScGallery;

class Gallery extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = ScGallery::latest()->get();
    }

    public function render()
    {
        return view('livewire.front.home.gallery');
    }
}
