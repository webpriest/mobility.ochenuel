<?php

namespace App\Http\Controllers\Manager;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactAdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('manager.contact.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        $contact->update(['read_at' => now()]);
        return view('manager.contact.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('manager.contact.index')->withSuccess('Message deleted');
    }
}
