<?php

namespace App\Http\Livewire\Front\Page;

use Livewire\Component;
use App\Models\ScReport;
use App\Models\Expertise;

class Sidebar extends Component
{
    public $sumcourse_reports, $sidebar_expertises;

    public function mount()
    {
        $this->sumcourse_reports = ScReport::latest()->get();
        $this->sidebar_expertises = Expertise::get(['id', 'title', 'slug', 'photo', 'icon']);
    }

    public function render()
    {
        return view('livewire.front.page.sidebar');
    }
}
