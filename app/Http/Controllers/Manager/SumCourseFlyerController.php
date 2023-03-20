<?php

namespace App\Http\Controllers\Manager;

use App\Models\ScEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SumCourseFlyerController extends Controller
{
    public function index(ScEvent $sumcourse)
    {
        return view('manager.sumcourse.sc-flyer.index', compact('sumcourse'));
    }
}
