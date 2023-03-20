<?php

namespace App\Http\Livewire\Main\Openstreet;

use App\Models\OpenStreet;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddOpenstreet extends Component
{
    use WithFileUploads;

    public $title, $sub_title, $content, $photo;

    protected $rules = [
        'title' => 'required|string',
        'content' => 'required|string',
    ];

    public function messages()
    {
        return [
            'title.required' => 'Enter Openstreet title',
            'content.required' => 'Enter content',
        ];
    }

    public function store()
    {
        $this->validate();

        $openstreet = new OpenStreet;
        $openstreet->title = $this->title;
        $openstreet->sub_title = $this->sub_title;
        $openstreet->content = $this->content;

        if($this->photo) {
            $openstreet->photo = $this->photo->store('images/openstreet', 'public');
        }

        $openstreet->save();

        session()->flash('success', 'OpenStreet added');
        return redirect()->route('manager.openstreet.index');
    }

    public function render()
    {
        return view('livewire.main.openstreet.add-openstreet');
    }
}
