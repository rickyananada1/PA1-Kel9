<?php

namespace App\Http\Controllers;

use App\Models\alualu;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function HomeUser()
    {
        $alualu = alualu::latest()->get();
        return view('frontend.index', compact('alualu'));
    }
}
