<?php

namespace App\Http\Controllers\Manager;

use App\Models\Country;
use App\Models\Speaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SpeakerStoreRequest;
use App\Http\Requests\SpeakerUpdateRequest;

class SpeakerAdminController extends Controller
{
    public function index()
    {
        $speakers = Speaker::latest()->get();

        return view('manager.speaker.index', compact('speakers'));
    }

    public function create()
    {
        $countries = Country::query()
                            ->select('id', 'country')
                            ->get();
        
        return view('manager.speaker.create', compact('countries'));
    }

    public function show(Speaker $speaker)
    {
        return view('manager.speaker.show', compact('speaker'));
    }

    public function store(SpeakerStoreRequest $request)
    {
        $speaker = new Speaker;
        $speaker->title = $request->title;
        $speaker->name = $request->name;
        $speaker->role = $request->role;
        $speaker->country_id = $request->country_id;
        $speaker->bio = $request->bio;

        if($request->hasFile('avatar')) {
            $speaker->avatar = $request->file('avatar')->store('images/speaker', 'public');
        }

        $speaker->save();

        return redirect()->route('manager.speaker.index')->withSuccess('Speaker added');
    }

    public function edit(Speaker $speaker)
    {
        $countries = Country::query()
                            ->select('id', 'country')
                            ->get();
                            
        return view('manager.speaker.edit', compact('speaker', 'countries'));
    }

    public function update(SpeakerUpdateRequest $request, Speaker $speaker)
    {
        $speaker->title = $request->title;
        $speaker->name = $request->name;
        $speaker->role = $request->role;
        $speaker->country_id = $request->country_id;
        $speaker->bio = $request->bio;

        if($request->hasFile('avatar')) {
            if(Storage::disk('public')->exists($speaker->avatar)) {
                unlink("storage/".$speaker->avatar);
            }
            $speaker->avatar = $request->file('avatar')->store('images/speaker', 'public');
        }

        $speaker->update();

        return redirect()->route('manager.speaker.index')->withSuccess('Speaker updated');
    }

    public function destroy(Speaker $speaker)
    {
        // Delete photo
        if(Storage::disk('public')->exists($speaker->avatar)) {
            unlink("storage/".$speaker->avatar);
        }
        
        $speaker->delete();

        return redirect()->route('manager.speaker.index')->withSuccess('Speaker deleted');
    }
}
