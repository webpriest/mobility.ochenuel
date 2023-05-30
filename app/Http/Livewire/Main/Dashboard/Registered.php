<?php

namespace App\Http\Livewire\Main\Dashboard;

use Livewire\Component;
use App\Models\Registration;

class Registered extends Component
{
    public $users;

    public function mount()
    {
        $this->users = Registration::latest()->get();
    }

    public function render()
    {
        return view('livewire.main.dashboard.registered');
    }
}
