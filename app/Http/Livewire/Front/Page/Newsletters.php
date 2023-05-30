<?php

namespace App\Http\Livewire\Front\Page;

use Livewire\Component;
use App\Models\Newsletter;

class Newsletters extends Component
{
    public $email, $added = false;

    protected $listeners = ['email.added' => 'emailAdded'];

    protected $rules = [
        'email' => ['required', 'email', 'unique:'.Newsletter::class]
    ];

    public function messages()
    {
        return [
            'email.required' => 'Your e-mail is required',
            'email.email' => 'This e-mail is invalid',
            'email.unique' => 'This e-mail already exists',
        ];
    }

    public function emailAdded()
    {
        $this->added = true;
    }

    public function store()
    {
        $this->validate();

        $newsletter = new Newsletter;
        $newsletter->email = $this->email;
        $newsletter->save();

        $this->reset();
        $this->emitSelf('email.added');
    }

    public function render()
    {
        return view('livewire.front.page.newsletters');
    }
}
