<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\layanan;
use App\Models\layanancategorym;

class LayananControllerU extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Layanan()
    {

        $category2 = layanancategorym::orderBy('layanan_category', 'ASC')->get();
        $layanan = layanan::latest()->paginate(4);
        return view('frontend.layanan.layanan', compact('category2', 'layanan'));
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
