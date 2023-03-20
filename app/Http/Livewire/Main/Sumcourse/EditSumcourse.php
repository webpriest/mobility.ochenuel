<?php

namespace App\Http\Livewire\Main\Sumcourse;

use App\Models\Country;
use App\Models\ScEvent;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class EditSumcourse extends Component
{
    public $countries, $sumcourse, $sumcourseId, $hour, $minute;
    public $theme, $sub_theme, $address, $city, $country_id, $event_date, $days, $event_time, $badge;

    protected $rules = [
        'theme' => 'required|string',
        'address' => 'required|string',
        'city' => 'required|string',
        'country_id' => 'required',
    ];

    public function messages()
    {
        return [
            'theme.required' => 'Enter SUMCourse theme',
            'address.required' => 'Provide location of the venue',
            'city.required' => 'City of the event',
            'country_id.required' => 'Choose a country',
        ];
    }

    public function mount()
    {
        $this->sumcourseId = $this->sumcourse->id;
        $this->theme = $this->sumcourse->theme;
        $this->sub_theme = $this->sumcourse->sub_theme;
        $this->address = $this->sumcourse->address;
        $this->city = $this->sumcourse->city;
        $this->country_id = $this->sumcourse->country_id;
        $this->event_date = $this->sumcourse->event_date->format('Y-m-d');
        // $this->event_time = $this->sumcourse->event_time->format('H:i');
        $this->hour = $this->sumcourse->event_time->format('H');
        $this->minute = $this->sumcourse->event_time->format('i');
        $this->days = $this->sumcourse->days;

        $this->countries = Country::get();
    }

    public function update()
    {
        $this->validate();

        $this->event_time = $this->hour.':'.$this->minute;

        $sumcourse = ScEvent::find($this->sumcourseId);

        $sumcourse->theme = $this->theme;
        $sumcourse->sub_theme = $this->sub_theme;
        $sumcourse->address = $this->address;
        $sumcourse->city = $this->city;
        $sumcourse->event_date = $this->paddedDate($this->event_date);
        $sumcourse->event_time = $this->event_time;
        $sumcourse->days = $this->days;
        $sumcourse->country_id = $this->country_id;

        if($this->badge) {
            if(Storage::disk('public')->exists($sumcourse->badge)) {
                unlink("storage/".$sumcourse->badge);
            }
            $sumcourse->badge = $this->badge->store('images/sumcourse/badge', 'public');
        }

        $sumcourse->update();

        session()->flash('success', 'SUMCourse event updated');
        return redirect()->route('manager.sumcourse.index');
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
        return view('livewire.main.sumcourse.edit-sumcourse');
    }
}
