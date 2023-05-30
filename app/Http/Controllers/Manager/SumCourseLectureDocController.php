<?php

namespace App\Http\Controllers\Manager;

use App\Models\Lecture;
use App\Models\LectureDoc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SumCourseLectureDocController extends Controller
{
    public function __invoke(LectureDoc $doc)
    {
        return view('manager.sumcourse.lecture.preview', compact('doc'));
    }
}
