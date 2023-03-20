<?php

namespace App\Http\Controllers\Manager;

use App\Models\Expertise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ExpertiseStoreRequest;
use App\Http\Requests\ExpertiseUpdateRequest;

class ExpertiseAdminController extends Controller
{
    public function index()
    {
        $expertises = Expertise::latest()->get();

        return view('manager.expertise.index', compact('expertises'));
    }

    public function create()
    {
        return view('manager.expertise.create');
    }

    public function show(Expertise $expertise)
    {
        return view('manager.expertise.show', compact('expertise'));
    }

    public function store(ExpertiseStoreRequest $request)
    {
        $expertise = new Expertise;
        $expertise->title = $request->title;
        $expertise->icon = $request->icon;
        $expertise->content = $request->content;

        if($request->hasFile('photo')) {
            $expertise->photo = $request->file('photo')->store('images/expertise', 'public');
        }

        $expertise->save();

        return redirect()->route('manager.expertise.index')->withSuccess('Expertise added');
    }

    public function edit(Expertise $expertise)
    {
        return view('manager.expertise.edit', compact('expertise'));
    }

    public function update(ExpertiseUpdateRequest $request, Expertise $expertise)
    {
        $expertise->title = $request->title;
        $expertise->icon = $request->icon;
        $expertise->content = $request->content;

        if($request->hasFile('photo')) {
            if(Storage::disk('public')->exists($expertise->photo)) {
                unlink("storage/".$expertise->photo);
            }
            $expertise->photo = $request->file('photo')->store('images/expertise', 'public');
        }

        $expertise->update();

        return redirect()->route('manager.expertise.index')->withSuccess('Expertise updated');
    }

    public function destroy(Expertise $expertise)
    {
        // Delete photo
        if(Storage::disk('public')->exists($expertise->badge)) {
            unlink("storage/".$expertise->badge);
        }
        
        $expertise->delete();

        return redirect()->route('manager.expertise.index')->withSuccess('Expertise deleted');
    }
}
