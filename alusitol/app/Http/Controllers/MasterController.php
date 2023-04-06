<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function master()
    {
        return view('front.layout.master');
    }
}
