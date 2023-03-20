<?php

namespace App\Http\Controllers\Manager;

use App\Models\OpenStreet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\OpenStreetStoreRequest;
use App\Http\Requests\OpenStreetUpdateRequest;

class OpenstreetAdminController extends Controller
{
    public function index()
    {
        $openstreets = OpenStreet::latest()->get();

        return view('manager.openstreet.index', compact('openstreets'));
    }

    public function create()
    {
        return view('manager.openstreet.create');
    }

    public function show(OpenStreet $openstreet)
    {
        return view('manager.openstreet.show', compact('openstreet'));
    }

    public function store(OpenStreetStoreRequest $request)
    {
        $openstreet = new OpenStreet;
        $openstreet->title = $request->title;
        $openstreet->sub_title = $request->sub_title;
        $openstreet->content = $request->content;

        if($request->hasFile('photo')) {
            $openstreet->photo = $request->file('photo')->store('images/openstreet', 'public');
        }

        $openstreet->save();

        return redirect()->route('manager.openstreet.index')->withSuccess('OpenStreet added');
    }

    public function edit(OpenStreet $openstreet)
    {
        return view('manager.openstreet.edit', compact('openstreet'));
    }

    public function update(OpenStreetUpdateRequest $request, OpenStreet $openstreet)
    {
        $openstreet->title = $request->title;
        $openstreet->sub_title = $request->sub_title;
        $openstreet->content = $request->content;

        if($request->hasFile('photo')) {
            if(Storage::disk('public')->exists($openstreet->photo)) {
                unlink("storage/".$openstreet->photo);
            }
            $openstreet->photo = $request->file('photo')->store('images/openstreet', 'public');
        }

        $openstreet->update();

        return redirect()->route('manager.openstreet.index')->withSuccess('OpenStreet updated');
    }

    public function destroy(OpenStreet $openstreet)
    {
        // Delete photo
        if(Storage::disk('public')->exists($openstreet->photo)) {
            unlink("storage/".$openstreet->photo);
        }
        
        $openstreet->delete();

        return redirect()->route('manager.openstreet.index')->withSuccess('OpenStreet deleted');
    }
}
