<?php

namespace App\Http\Controllers\Manager;

use App\Models\BikeShare;
use App\Models\BsGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BikeshareGalleryController extends Controller
{
    public function index(BikeShare $bikeshare)
    {
        return view('manager.bikeshare.bs-gallery.index', compact('bikeshare'));
    }

    public function store(Request $request)
    {
        $gallery = new BsGallery;
        $gallery->description = $request->description;

        if($request->hasFile('photo')) {
            $gallery->photo = $request->file('photo')->store('images/bikeshare/gallery', 'public');
        }

        $gallery->save();

        return redirect()->route('manager.bikeshare.gallery.index', $gallery->bike_share)->withSuccess('Bike Share photo added');
    }

    public function destroy(BsGallery $gallery)
    {
        // Delete photo
        if(Storage::disk('public')->exists($gallery->photo)) {
            unlink("storage/".$gallery->photo);
        }
        
        $gallery->delete();

        return redirect()->route('manager.bikeshare.gallery.index', $gallery->bike_share)->withSuccess('Bike Share photo deleted');
    }
}
