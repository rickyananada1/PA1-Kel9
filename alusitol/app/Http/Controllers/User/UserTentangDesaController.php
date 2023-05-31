<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tentangdesa;
use App\Models\sejarahdesa;
use App\Models\visimisi;
use App\Models\perangkatdesa;
use App\Models\geografis;
use App\Models\beritacategorym;
use App\Models\layanancategorym;

class UserTentangDesaController extends Controller
{
    public function TentangDesa()
    {
        $tentangdesa = tentangdesa::latest()->paginate(1);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $category = beritaCategorym::orderBy('berita_category')->get();
        return view('front.page_tentangdesa.tentangdesa', compact('tentangdesa', 'category', 'categoryJ'));
    }
    public function SejarahDesa()
    {
        $sejarahdesa = sejarahdesa::latest()->paginate(1);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $category = beritaCategorym::orderBy('berita_category')->get();
        return view('front.page_tentangdesa.sejarahdesa', compact('sejarahdesa', 'category', 'categoryJ'));
    }
    public function VisiMisiDesa()
    {
        $visimisi = visimisi::latest()->paginate(1);
        $category = beritaCategorym::orderBy('berita_category')->get();
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        return view('front.page_tentangdesa.visimisi', compact('visimisi', 'category', 'categoryJ'));
    }
    public function GeografisDesa()
    {
        $geografis = geografis::latest()->paginate(1);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $category = beritaCategorym::orderBy('berita_category')->get();
        return view('front.page_tentangdesa.geografis', compact('geografis', 'category', 'categoryJ'));
    }
    public function PerangkatDesa()
    {
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $perangkatdesa = perangkatdesa::latest()->paginate(8);
        $category = beritaCategorym::orderBy('berita_category')->get();
        return view('front.page_tentangdesa.perangkatdesa', compact('perangkatdesa', 'category', 'categoryJ'));
    }
}
