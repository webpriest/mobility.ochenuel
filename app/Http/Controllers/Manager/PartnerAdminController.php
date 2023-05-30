<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerAdminController extends Controller
{
    public function __invoke()
    {
        return view('manager.partner.index');
    }
}
