<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function index()
    {
        return view('speaker.index');
    }

    public function show(Speaker $speaker)
    {
        $speaker->load('lectures');
        return view('speaker.show', compact('speaker'));
    }
}
