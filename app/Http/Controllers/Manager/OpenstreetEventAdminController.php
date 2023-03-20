<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Models\OpenStreetEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OpenstreetEventAdminController extends Controller
{
    public function index()
    {
        return view('manager.openstreet_event.index');
    }

    public function create()
    {
        return view('manager.openstreet_event.create');
    }

    public function show(OpenStreetEvent $openstreetevent)
    {
        return view('manager.openstreet_event.show', compact('openstreetevent'));
    }

    public function edit(OpenStreetEvent $openstreetevent)
    {
        return view('manager.openstreet_event.edit', compact('openstreetevent'));
    }

    public function destroy(OpenStreetEvent $openstreetevent)
    {
        // Delete photo
        if(Storage::disk('public')->exists($openstreetevent->photo)) {
            unlink("storage/".$openstreetevent->photo);
        }
        
        $openstreetevent->delete();

        return redirect()->route('manager.openstreet.event.index')->withSuccess('OpenStreet Event deleted');
    }
}
