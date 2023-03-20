<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index()
    {
        $expertises = Expertise::latest()->get();

        return view('expertise.index', compact('expertises'));
    }

    public function show(Expertise $expertise)
    {
        return view('expertise.show', compact('expertise'));
    }
}
