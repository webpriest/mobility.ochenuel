<?php

namespace App\Http\Controllers\Manager;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationAdminController extends Controller
{
    public function index()
    {
        $users = Registration::latest()->get();
        return view('manager.registration.index', compact('users'));
    }
    
    public function show(Registration $registration)
    {
        return view('manager.registration.show', compact('registration'));
    }
    
    public function destroy(Registration $registration)
    {
        $registration->delete();

        return redirect()->route('manager.registration.index')->withSuccess('Participant deleted');
    }
}
