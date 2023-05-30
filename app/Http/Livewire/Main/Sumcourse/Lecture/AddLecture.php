<?php

namespace App\Http\Livewire\Main\Sumcourse\Lecture;

use App\Models\Lecture;
use App\Models\Speaker;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddLecture extends Component
{
    use WithFileUploads;

    public $speakers, $sumcourse;
    public $speaker_id, $sc_event_id, $topic, $lecture_day, $lecture_session;

    protected $rules = [
        'speaker_id' => 'required',
        'topic' => 'required|string'
    ];

    public function messages()
    {
        return [
            'speaker_id.required' => 'Choose a speaker',
            'topic.required' => 'Add a topic'
        ];
    }

    public function mount()
    {
        $this->sc_event_id = $this->sumcourse->id;
        $this->speakers = Speaker::query()
                            ->select('id', 'name')
                            ->get();
    }

    public function store()
    {
        $this->validate();

        $lecture = new Lecture;
        $lecture->sc_event_id = $this->sc_event_id;
        $lecture->speaker_id = $this->speaker_id;
        $lecture->topic = $this->topic;
        $lecture->lecture_day = $this->lecture_day;
        $lecture->lecture_session = $this->lecture_session;

        $lecture->save();

        session()->flash('success', 'Lecture added');
        return redirect()->route('manager.sumcourse.lecture.index');
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
        return view('livewire.main.sumcourse.lecture.add-lecture');
    }
}
