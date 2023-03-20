<?php

namespace App\Http\Controllers;

use App\Models\BikeShare;
use Illuminate\Http\Request;

class BikeshareController extends Controller
{
    public function __invoke()
    {
        $bikeshares = BikeShare::latest()->get();

        return view('bikeshare.index', compact('bikeshares'));
    }
}
