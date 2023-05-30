<?php

namespace App\Http\Livewire\Main\Sumcourse\Lecturedoc;

use Livewire\Component;

class Preview extends Component
{
    public $lecturedoc;

    public function render()
    {
        return view('livewire.main.sumcourse.lecturedoc.preview');
    }
}
