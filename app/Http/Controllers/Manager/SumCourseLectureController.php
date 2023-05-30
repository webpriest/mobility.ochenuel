<?php

namespace App\Http\Controllers\Manager;

use App\Models\Lecture;
use App\Models\ScEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SumCourseLectureController extends Controller
{
    public function index()
    {
        $sumcourses = ScEvent::latest()->get();

        return view('manager.sumcourse.lecture.index', compact('sumcourses'));
    }
    
    public function create(ScEvent $sumcourse)
    {
        return view('manager.sumcourse.lecture.create', compact('sumcourse'));
    }

    public function lectures(ScEvent $sumcourse)
    {
        return view('manager.sumcourse.lecture.lectures', compact('sumcourse'));
    }

    public function show(Lecture $lecture)
    {
        return view('manager.sumcourse.lecture.show', compact('lecture'));
    }

    public function edit(Lecture $lecture)
    {
        return view('manager.sumcourse.lecture.edit', compact('lecture'));
    }
}