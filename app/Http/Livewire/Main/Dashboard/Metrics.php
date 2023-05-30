<?php

namespace App\Http\Livewire\Main\Dashboard;

use App\Models\Contact;
use App\Models\ScEvent;
use Livewire\Component;
use App\Models\Registration;
use App\Models\OpenStreetEvent;

class Metrics extends Component
{
    public $registrationCount, $contactCount, $sumcourseCount, $openstreetCount;

    public function mount()
    {
        $this->registrationCount = Registration::count();
        $this->contactCount = Contact::unread()->count();
        $this->sumcourseCount = ScEvent::count();
        $this->openstreetCount = OpenStreetEvent::count();
    }

    public function render()
    {
        return view('livewire.main.dashboard.metrics');
    }
}
