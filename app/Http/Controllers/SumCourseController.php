<?php

namespace App\Http\Controllers;

use App\Models\ScEvent;
use App\Models\ScFlyer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SumCourseController extends Controller
{
    public function index()
    {
        $sumcourses = ScEvent::latest()->get();
        $upcoming_event = $sumcourses->first();
        $past_events = $sumcourses->skip(1);

        return view('sumcourse.index', compact('upcoming_event', 'past_events'));
    }

    public function show(ScEvent $sumcourse)
    {
        return view('sumcourse.show', compact('sumcourse'));
    }

    public function flyer(ScFlyer $flyer)
    {
        return view('sumcourse.flyer', compact('flyer'));
    }

    public function download(ScFlyer $flyer)
    {
        $name = Str::slug($flyer->sc_event->theme);
        return Storage::disk('public')->download($flyer->filename, $name);
    }
}
