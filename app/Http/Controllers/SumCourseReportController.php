<?php

namespace App\Http\Controllers;

use App\Models\ScEvent;
use App\Models\ScReport;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SumCourseReportController extends Controller
{
    public function index(ScEvent $sumcourse)
    {
        $reports = $sumcourse->sc_reports;

        return view('sumcourse.report.index', compact('reports'));
    }

    public function show(ScReport $report)
    {
        return view('sumcourse.report.show', compact('report'));
    }

    public function download(ScReport $report)
    {
        $name = Str::slug($report->title);
        return Storage::disk('public')->download($report->filename, $name);
    }
}
