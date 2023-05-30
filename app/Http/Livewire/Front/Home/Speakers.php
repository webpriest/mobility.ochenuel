<?php

namespace App\Http\Livewire\Front\Home;

use App\Models\Speaker;
use Livewire\Component;

class Speakers extends Component
{
    public $speakers;

    public function mount()
    {
        $this->speakers = Speaker::get();
    }

    public function render()
    {
        return view('livewire.front.home.speakers');
    }
}
