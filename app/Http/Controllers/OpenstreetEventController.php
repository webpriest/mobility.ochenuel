<?php

namespace App\Http\Controllers;

use App\Models\OsFlyer;
use Illuminate\Http\Request;
use App\Models\OpenStreetEvent;

class OpenstreetEventController extends Controller
{
    public function index()
    {
        $openstreetevents = OpenStreetEvent::latest()->get();

        return view('openstreet.event.index', compact('openstreetevents'));
    }
    
    public function show(OpenStreetEvent $openstreetevent)
    {
        return view('openstreet.event.show', compact('openstreetevent'));
    }

    public function flyer(OsFlyer $flyer)
    {
        return view('openstreet.event.flyer', compact('flyer'));
    }
}
