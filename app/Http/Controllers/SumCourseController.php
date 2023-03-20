<?php

namespace App\Http\Controllers;

use App\Models\ScEvent;
use Illuminate\Http\Request;

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
}
