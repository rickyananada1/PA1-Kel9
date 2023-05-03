<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\beritacategorym;
use App\Models\layanancategorym;
use App\Models\berita;
use App\Models\layanan;
use Illuminate\Http\Request;
use App\Models\perangkatdesa;
use App\Models\tentangdesa;

class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function HomeIndex()
    {
        $profilperangkat = perangkatdesa::latest()->paginate(3);
        $category2 = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $layanan = layanan::latest()->paginate(3);
        $category1 = beritacategorym::orderBy('berita_category', 'ASC')->get();
        $berita = berita::latest()->paginate(3);
        return view('frontend.index_user', compact('berita', 'category1', 'layanan', 'category2', 'profilperangkat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}