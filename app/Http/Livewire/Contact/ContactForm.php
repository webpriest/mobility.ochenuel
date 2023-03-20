<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name, $email, $subject, $message, $thanks = false;

    protected $listeners = ['submitted' => 'formSubmitted'];

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|string|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ];

    public function messages()
    {
        return [
            'name.required' => 'Enter your name',
            'email.required' => 'Provide your e-mail',
            'email.email' => 'E-mail is invalid',
            'subject.required' => 'Choose a subject',
            'message.required' => 'Enter your message',
        ];
    }

    public function formSubmitted()
    {
        $this->thanks = true;

    }

    public function store()
    {
        $this->validate();

        // Save record in DB
        $contact = new Contact;
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();

        $this->thanks = true;

        $this->emitSelf('submitted');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact.contact-form');
    }
}
