<?php

namespace App\Http\Livewire\Front\Footer;

use Livewire\Component;
use App\Models\Expertise;

class Expertises extends Component
{
    public $expertises;

    public function mount()
    {
        $this->expertises = Expertise::get();
    }

    public function render()
    {
        return view('livewire.front.footer.expertises');
    }
}
