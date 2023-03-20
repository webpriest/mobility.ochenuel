<?php

namespace App\Http\Livewire\Main\Openstreetevent;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\OpenStreetEvent;

class AddOpenstreetEvent extends Component
{
    use WithFileUploads;

    public $hour, $minute;
    public $title, $location, $os_date, $os_time, $photo, $hosted;

    protected $rules = [
        'title' => 'required|string',
        'location' => 'required|string',
    ];

    public function messages()
    {
        return [
            'title.required' => 'Enter OpenStreet event title',
            'location.required' => 'Provide location of the venue',
        ];
    }

    public function store()
    {
        $this->validate();

        $this->os_time = $this->hour.':'.$this->minute;

        $event = new OpenStreetEvent;
        $event->title = $this->title;
        $event->location = $this->location;
        $event->os_date = $this->paddedDate($this->os_date);
        $event->os_time = $this->os_time;

        if($this->photo) {
            $event->photo = $this->photo->store('images/openstreet/events', 'public');
        }

        $event->save();

        session()->flash('success', 'OpenStreet event added');
        return redirect()->route('manager.openstreet.event.index');
    }

    protected function paddedDate($date)
    {
        $split = explode('-', $date);
        $day = sprintf("%02d", $split[2]);
        $month = sprintf("%02d", $split[1]);
        $year = $split[0];
        return $year.'-'.$month.'-'.$day;
    }

    public function render()
    {
        return view('livewire.main.openstreetevent.add-openstreet-event');
    }
}
