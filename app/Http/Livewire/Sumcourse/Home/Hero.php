<?php

namespace App\Http\Livewire\Sumcourse\Home;

use App\Models\ScEvent;
use Livewire\Component;

class Hero extends Component
{
    public $sumcourse;
    public $first_day, $last_day;

    public function mount()
    {
        $this->sumcourse = ScEvent::latest()->first();
    }

    public function date_range()
    {
        if($this->sumcourse) {
            $this->first_day = $this->sumcourse->event_date->format('jS');
            $this->last_day = $this->sumcourse->event_date->addDays($this->sumcourse->days - 1);
            return $this->first_day.' - '.$this->last_day->format('jS F, Y');
        }
    }

    public function render()
    {
        return view('livewire.sumcourse.home.hero');
    }
}
