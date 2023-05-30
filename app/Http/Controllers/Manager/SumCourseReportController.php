<?php

namespace App\Http\Controllers\Manager;

use App\Models\ScReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SumCourseReportController extends Controller
{
    public function index()
    {
        $reports = ScReport::latest()->get();

        return view('manager.sumcourse.sc-report.index', compact('reports'));
    }

    public function show(ScReport $report)
    {
        return view('manager.sumcourse.sc-report.show', compact('report'));
    }

    public function edit(ScReport $report)
    {
        return view('manager.sumcourse.sc-report.edit', compact('report'));
    }

    public function image(ScReport $report)
    {
        return view('manager.sumcourse.sc-report.image', compact('report'));
    }
}
