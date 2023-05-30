<?php

namespace App\Http\Livewire\Front\Home;

use App\Models\ScEvent;
use Livewire\Component;
use App\Models\OpenStreetEvent;

class Schedule extends Component
{
    public $events, $active = 0;

    public function mount()
    {
        $events = collect();
        ScEvent::get()->map(function($sumcourse) use ($events) {
            $data = [
                'id' => $sumcourse->token,
                'name' => 'SUMCOURSE',
                'day' => $sumcourse->event_date->format('d'),
                'month' => $sumcourse->event_date->format('F'),
                'year' => $sumcourse->event_date->format('Y')
            ];
            return $events->push($data);
        });
        OpenStreetEvent::get()->map(function($os) use ($events) {
            $data = [
                'id' => $os->slug,
                'name' => 'OpenStreets',
                'day' => $os->os_date->format('d'),
                'month' => $os->os_date->format('F'),
                'year' => $os->os_date->format('Y')
            ];
            return $events->push($data);
        });
        $this->events = array_slice($events->toArray(), 0, 3, true);
    }

    public function chosen($id, $name)
    {
        // $this->active = $key;
        $this->emit('theChosen', $id, $name);
    }

    public function render()
    {
        return view('livewire.front.home.schedule');
    }
}
