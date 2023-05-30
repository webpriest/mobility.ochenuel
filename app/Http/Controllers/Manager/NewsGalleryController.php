<?php

namespace App\Http\Controllers\Manager;

use App\Models\NewsPost;
use App\Models\NewsGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsGalleryController extends Controller
{
    public function index(NewsPost $post)
    {
        return view('manager.news.gallery.index', compact('post'));
    }

    public function destroy(NewsGallery $gallery)
    {
        // Delete photo
        if(Storage::disk('public')->exists($gallery->photo)) {
            unlink("storage/".$gallery->photo);
        }
        
        $gallery->delete();

        return redirect()->route('manager.bikeshare.gallery.index', $gallery->bike_share)->withSuccess('Bike Share photo deleted');
    }
}
