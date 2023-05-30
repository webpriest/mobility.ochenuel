<?php

namespace App\Http\Livewire\Front\Footer;

use App\Models\Partner;
use Livewire\Component;

class Partners extends Component
{
    public $partners;

    public function mount()
    {
        $this->partners = Partner::get();
    }

    public function render()
    {
        return view('livewire.front.footer.partners');
    }
}
