<?php

namespace App\Http\Livewire\Front\Home;

use Carbon\Carbon;
use App\Models\ScEvent;
use Livewire\Component;
use App\Models\OpenStreetEvent;

class ScheduleDetail extends Component
{
    public $programme, $flyer, $type = 'SUMCOURSE';

    protected $listeners = ['theChosen'];

    public function theChosen($id, $name)
    {
        // dd($id, $name);
        if($name == 'SUMCOURSE') {
            $this->type = 'SUMCOURSE';
            $this->programme = ScEvent::where('token', $id)->first();
            $this->flyer = $this->programme->sc_flyer;
        }
        else {
            $this->type = 'OpenStreets';
            $this->programme = OpenStreetEvent::where('slug', $id)->first();
            $this->flyer = $this->programme->os_flyers->first();
        }
    }

    public function mount()
    {
        $this->programme = ScEvent::get()
                                    ->map(function($event){
                                        $today = Carbon::now();
                                        if($today->gt($event->event_date)) {
                                            return $event;
                                        }
                                        // return strtotime($event->event_date->format('Y-m-d')) >= strtotime(date('Y-m-d')) ? $event : null;
                                    })->first();
        $this->flyer = $this->programme->sc_flyer;
    }

    public function render()
    {
        return view('livewire.front.home.schedule-detail');
    }
}
