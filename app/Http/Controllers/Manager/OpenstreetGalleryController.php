<?php

namespace App\Http\Controllers\Manager;

use App\Models\OpenStreetEvent;
use App\Models\OsGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OpenstreetGalleryController extends Controller
{
    public function index(OpenStreetEvent $openstreetevent)
    {
        return view('manager.openstreet_event.gallery.index', compact('openstreetevent'));
    }

    public function destroy(OsGallery $gallery)
    {
        // Delete photo
        if(Storage::disk('public')->exists($gallery->photo)) {
            unlink("storage/".$gallery->photo);
        }
        
        $gallery->delete();

        return redirect()->route('manager.openstreet.gallery.index', $gallery->open_street_event)->withSuccess('OpenStreet photo deleted');
    }
}
