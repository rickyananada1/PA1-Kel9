<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita;
use App\Http\Controllers\User\Post;
use App\Models\beritacategorym;
use App\Models\layanancategorym;

class UserBeritaController extends Controller
{
    public function Berita()
    {

        $category = beritaCategorym::orderBy('berita_category')->paginate(5);
        $berita = berita::latest()->paginate(2);
        $beritarecent = berita::latest()->paginate(5);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);


        return view('front.page_berita.berita', compact('berita', 'beritarecent', 'category', 'categoryJ'));
    }
    public function SingleBerita($id)
    {
        $beritarecent = berita::latest()->paginate(5);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);
        $category = beritacategorym::orderBy('berita_category', 'ASC')->paginate(5);
        $berita = Berita::where('id', $id)->get();
        return view('front.page_berita.singleberita', compact('category', 'berita', 'beritarecent', 'categoryJ'));
    }
    public function AllCategory($id)
    {
        $beritarecent = berita::latest()->paginate(5);
        $allberita = berita::latest()->paginate(5);
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);
        $category = beritaCategorym::orderBy('berita_category', 'ASC')->paginate(5);
        $beritapost = berita::where('berita_category_id', $id)->orderBy('id', 'DESC')->paginate(5);
        $categoryname = beritacategorym::findOrFail($id);
        return view('front.page_berita.allkategori', compact('beritapost', 'allberita', 'category', 'categoryname', 'beritarecent', 'categoryJ'));
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $berita = berita::where('berita_title', 'LIKE', '%' . $request->search . '%')->paginate(5);
            $beritarecent = berita::latest()->paginate(5);
            $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);
            $category = beritaCategorym::orderBy('berita_category', 'ASC')->paginate(5);
            return view('front.page_berita.berita', compact('berita', 'beritarecent', 'category', 'categoryJ'));
        } else {
            $berita = berita::all()->paginate(5);
        }
        return view('front.page_berita.berita', compact('berita'));
    }
}
