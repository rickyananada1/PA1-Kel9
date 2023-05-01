<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tentangdesa;
use App\Models\perangkatdesa;
use App\Models\layanancategorym;

class TentangDesaControllerU extends Controller
{
    public function TentangDesa()
    {
        $category2 = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $tentangdesa = tentangdesa::latest()->get();
        $perangkatdesa = perangkatdesa::latest()->get();

        return view('frontend.tentang_desa.tentangdesa', compact('tentangdesa', 'category2', 'perangkatdesa'));
    }
}
