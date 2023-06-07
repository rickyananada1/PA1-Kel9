<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeri;
use App\Models\beritacategorym;
use App\Models\layanancategorym;

class UserGaleriController extends Controller
{
    public function Galeri()
    {
        $category = beritaCategorym::orderBy('berita_category')->paginate(5);
        $galeri = galeri::latest()->paginate(12);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);
        return view('front.page_galeri.galeri', compact('galeri', 'category', 'categoryJ'));
    }
}
