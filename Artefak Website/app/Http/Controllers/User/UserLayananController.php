<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\layanan;
use App\Models\layanancategorym;
use App\Models\beritacategorym;

class UserLayananController extends Controller
{
    public function Layanan()
    {
        $layanan = layanan::latest()->paginate(3);
        $categoryL = layanancategorym::oldest()->paginate(6);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);
        $category = beritaCategorym::orderBy('berita_category')->paginate(5);
        return view('front.page_layanan.layanan', compact('layanan', 'category', 'categoryL', 'categoryJ'));
    }

    public function AllCategory($id)
    {
        $layananpost = layanan::where('layanan_category_id', $id)->orderBy('id', 'DESC')->paginate(5);
        $categoryname = layanancategorym::findOrFail($id);
        $category = beritaCategorym::orderBy('berita_category', 'ASC')->get();
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        return view('front.page_layanan.allkategoriL', compact('categoryname', 'layananpost', 'category', 'categoryJ'));
    }
}
