<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\galeri;
use App\Models\layanancategorym;
use App\Models\galericategorym;
use Illuminate\Http\Request;

class GaleriControllerU extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Galeri()
    {
        $category2 = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $category = galericategorym::orderBy('galeri_category', 'ASC')->get();
        $galeri = galeri::latest()->paginate(6);
        return view('frontend.galeri.galeri', compact('category2', 'category', 'galeri'));
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
