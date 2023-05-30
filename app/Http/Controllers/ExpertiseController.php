<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function __invoke(Expertise $expertise)
    {
        return view('expertise.show', compact('expertise'));
    }
}
