<?php

namespace App\Http\Controllers;

use App\Models\OpenStreet;
use Illuminate\Http\Request;

class OpenstreetController extends Controller
{
    public function __invoke()
    {
        $openstreets = OpenStreet::latest()->get();

        return view('openstreet.index', compact('openstreets'));
    }
}
