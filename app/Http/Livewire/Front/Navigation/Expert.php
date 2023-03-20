<?php

namespace App\Http\Livewire\Front\Navigation;

use Livewire\Component;
use App\Models\Expertise;

class Expert extends Component
{
    public $experts;

    public function mount()
    {
        $this->experts = Expertise::latest()
                                ->select('id', 'title', 'slug')
                                ->get();
    }

    public function render()
    {
        return view('livewire.front.navigation.expert');
    }
}
