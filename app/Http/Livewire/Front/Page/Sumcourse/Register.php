<?php

namespace App\Http\Livewire\Front\Page\Sumcourse;

use App\Models\Country;
use App\Models\ScEvent;
use Livewire\Component;
use App\Models\Registration;

class Register extends Component
{
    public $sumcourses, $countries;
    public $sc_event_id, $title, $firstname, $middlename, $lastname, $email, $phone, $address, $city, $country_id, $organisation;

    protected $rules = [
        'firstname' => ['required', 'string', 'max:50'],
        'lastname' => ['required', 'string', 'max:50'],
        'email' => ['required', 'string', 'email', 'unique:'.Registration::class],
        'phone' => ['required', 'string', 'max:15'],
        'address' => ['required', 'string', 'max:150'],
        'city' => ['required', 'string', 'max:50'],
        'organisation' => ['required', 'string', 'max:100'],
        'country_id' => ['required'],
        'sc_event_id' => ['required'],
    ];

    public function messages()
    {
        return [
            'firstname.required' => 'First name is required',
            'lastname.required' => 'Last name is required',
            'email.required' => 'E-mail is required',
            'email.email' => 'E-mail is invalid',
            'email.unique' => 'That e-mail already exists',
            'phone.required' => 'Phone number is required',
            'address.required' => 'Provide a contact address',
            'city.required' => 'Provide a contact address',
            'organisation.required' => 'Name of organisation is required',
            'country_id.required' => 'Choose country where you live',
            'sc_event_id.required' => 'Choose a SUMCOURSE event',
        ];
    }

    public function mount()
    {
        $this->countries = Country::get();
        $this->sumcourses = ScEvent::where('event_date', '>=', date("Y-m-d"))->get();
    }

    public function store()
    {
        $this->validate();

        $register = new Registration;

        $register->sc_event_id = $this->sc_event_id;
        $register->title = $this->title;
        $register->firstname = $this->firstname;
        $register->middlename = $this->middlename;
        $register->lastname = $this->lastname;
        $register->organisation = $this->organisation;
        $register->email = $this->email;
        $register->phone = $this->phone;
        $register->address = $this->address;
        $register->city = $this->city;
        $register->country_id = $this->country_id;

        $register->save();

        session()->flash('success', 'You have been successfully registered');
        $this->reset();
        return redirect()->route('registration.index');
    }

    public function render()
    {
        return view('livewire.front.page.sumcourse.register');
    }
}
