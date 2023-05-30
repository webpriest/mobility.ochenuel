<?php

namespace App\Http\Livewire\Front\Page;

use Livewire\Component;
use App\Models\ScReport;
use App\Models\OpenStreetEvent;

class OsStreet extends Component
{
    public $os_street_events, $sumcourse_reports;
    
    public function mount()
    {
        $this->sumcourse_reports = ScReport::latest()->get();
        $this->os_street_events = OpenStreetEvent::query()
                                ->latest()
                                ->select('id', 'slug', 'title', 'location', 'photo', 'os_date')
                                ->get();
    }

    public function render()
    {
        return view('livewire.front.page.os-street');
    }
}
