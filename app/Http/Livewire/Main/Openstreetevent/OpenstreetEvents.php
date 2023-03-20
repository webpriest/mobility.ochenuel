<?php

namespace App\Http\Livewire\Main\Openstreetevent;

use Livewire\Component;
use App\Models\OpenStreetEvent;

class OpenstreetEvents extends Component
{
    public $os_events;

    public function mount()
    {
        $this->os_events = OpenStreetEvent::latest()->get();
    }

    public function render()
    {
        return view('livewire.main.openstreetevent.openstreet-events');
    }
}
