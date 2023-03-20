<?php

namespace App\Http\Controllers\Manager;

use App\Models\BikeShare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BikeShareStoreRequest;
use App\Http\Requests\BikeShareUpdateRequest;

class BikeshareAdminController extends Controller
{
    public function index()
    {
        $bikeshares = BikeShare::latest()->get();

        return view('manager.bikeshare.index', compact('bikeshares'));
    }

    public function create()
    {
        return view('manager.bikeshare.create');
    }

    public function show(BikeShare $bikeshare)
    {
        return view('manager.bikeshare.show', compact('bikeshare'));
    }

    public function store(BikeShareStoreRequest $request)
    {
        $bikeshare = new BikeShare;
        $bikeshare->title = $request->title;
        $bikeshare->content = $request->content;

        if($request->hasFile('photo')) {
            $bikeshare->photo = $request->file('photo')->store('images/bikeshare', 'public');
        }

        $bikeshare->save();

        return redirect()->route('manager.bikeshare.index')->withSuccess('Bike Share added');
    }

    public function edit(BikeShare $bikeshare)
    {
        return view('manager.bikeshare.edit', compact('bikeshare'));
    }

    public function update(BikeShareUpdateRequest $request, BikeShare $bikeshare)
    {
        $bikeshare->title = $request->title;
        $bikeshare->content = $request->content;

        if($request->hasFile('photo')) {
            if(Storage::disk('public')->exists($bikeshare->photo)) {
                unlink("storage/".$bikeshare->photo);
            }
            $bikeshare->photo = $request->file('photo')->store('images/bikeshare', 'public');
        }

        $bikeshare->update();

        return redirect()->route('manager.bikeshare.index')->withSuccess('Bike Share updated');
    }

    public function destroy(BikeShare $bikeshare)
    {
        // Delete photo
        if(Storage::disk('public')->exists($bikeshare->photo)) {
            unlink("storage/".$bikeshare->photo);
        }
        
        $bikeshare->delete();

        return redirect()->route('manager.bikeshare.index')->withSuccess('Bike Share Event deleted');
    }
}
