<?php

namespace App\Http\Livewire\Main\Partner;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Partners extends Component
{
    use WithFileUploads;
    
    public $partners, $partnerId;
    public $name, $logo, $url;

    protected $rules = [
        'name' => ['required'],
        'logo' => ['required', 'file'],
    ];

    public function messages()
    {
        return [
            'name.required' => 'Enter name of partner',
            'logo.required' => 'Choose a logo for upload',
            'logo.file' => 'Logo must be a file',
        ];
    }

    public function mount()
    {
        $this->partners = Partner::get();
    }

    public function logo()
    {
        return $this->logo ? $this->logo->temporaryUrl() : asset('storage/img/image-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();
        
        $partner = new Partner;
        $partner->name = $this->name;
        $partner->url = $this->url;

        if($this->logo) {
            $partner->logo = $this->logo->store('/images/partners', 'public');
        }

        $partner->save();

        $this->reset();
        session()->flash('success', 'Partner added');

        return redirect()->route('manager.partner.index');
    }

    public function render()
    {
        return view('livewire.main.partner.partners');
    }
}
