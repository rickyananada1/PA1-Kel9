<?php

namespace App\Http\Controllers\User;

use App\Models\layanancategorym;
use App\Http\Controllers\Controller;
use App\Models\beritacategorym;
use App\Models\berita;
use Illuminate\Http\Request;

class BeritaControllerU extends Controller
{
    public function Berita()
    {
        $category2 = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $category1 = beritacategorym::orderBy('berita_category', 'ASC')->get();
        $berita = berita::latest()->paginate(6);
        return view('frontend.berita.berita', compact('category2', 'category1', 'berita'));
    }
    public function SingleBerita()
    {
        $category2 = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $category1 = beritacategorym::orderBy('berita_category', 'ASC')->get();
        $berita = berita::latest()->paginate(1);
        return view('frontend.berita.singleberita', compact('category2', 'category1', 'berita'));
    }
    public function AllCategory($id)
    {
        $category2 = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $allberita = berita::latest()->paginate(5);
        $category = beritaCategorym::orderBy('berita_category', 'ASC')->get();
        $beritapost = berita::where('berita_category_id', $id)->orderBy('id', 'DESC')->paginate(5);
        $categoryname = beritacategorym::findOrFail($id);
        return view('frontend.berita.allkategori', compact('beritapost', 'allberita', 'category', 'categoryname', 'category2'));
    }
}
