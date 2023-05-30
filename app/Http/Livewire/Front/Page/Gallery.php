<?php

namespace App\Http\Livewire\Front\Page;

use Livewire\Component;

class Gallery extends Component
{
    public $openstreetevent, $galleries;

    public function mount()
    {
        $this->galleries = $this->openstreetevent->os_galleries;
    }

    public function render()
    {
        return view('livewire.front.page.gallery');
    }
}
