<?php

namespace App\Http\Controllers\Manager;

use App\Models\ScEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SumCourseStoreRequest;
use App\Http\Requests\SumCourseUpdateRequest;

class SumCourseAdminController extends Controller
{
    public function index()
    {
        $sumcourses = ScEvent::latest()->get();

        return view('manager.sumcourse.index', compact('sumcourses'));
    }

    public function create()
    {
        return view('manager.sumcourse.create');
    }

    public function show(ScEvent $sumcourse)
    {
        return view('manager.sumcourse.show', compact('sumcourse'));
    }

    public function store(SumCourseStoreRequest $request)
    {
        $sumcourse = new ScEvent;
        $sumcourse->theme = $request->theme;
        $sumcourse->sub_theme = $request->sub_theme;
        $sumcourse->address = $request->address;

        if($request->hasFile('badge')) {
            $sumcourse->badge = $request->file('badge')->store('images/sumcourse/badge', 'public');
        }

        $sumcourse->save();

        return redirect()->route('manager.sumcourse.index')->withSuccess('Sumcourse added');
    }

    public function edit(ScEvent $sumcourse)
    {
        return view('manager.sumcourse.edit', compact('sumcourse'));
    }

    public function update(SumCourseUpdateRequest $request, ScEvent $sumcourse)
    {
        $sumcourse->title = $request->title;
        $sumcourse->content = $request->content;

        if($request->hasFile('badge')) {
            if(Storage::disk('public')->exists($sumcourse->badge)) {
                unlink("storage/".$sumcourse->badge);
            }
            $sumcourse->badge = $request->file('badge')->store('images/sumcourse/badge', 'public');
        }

        $sumcourse->update();

        return redirect()->route('manager.sumcourse.index')->withSuccess('Sumcourse updated');
    }

    public function destroy(ScEvent $sumcourse)
    {
        // Delete photo
        if(Storage::disk('public')->exists($sumcourse->badge)) {
            unlink("storage/".$sumcourse->badge);
        }
        
        $sumcourse->delete();

        return redirect()->route('manager.sumcourse.index')->withSuccess('Sumcourse Event deleted');
    }
}
