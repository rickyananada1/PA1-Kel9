<?php

namespace App\Http\Controllers\Admin;

use App\Models\galericategorym;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class GaleriCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AllGaleriCategory()
    {
        $category = galericategorym::latest()->paginate(10);
        return view('admin.page_galeri.category.all', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddGaleriCategory()
    {
        return view('admin.page_galeri.category.add');
    } //end Method

    /**
     * Store a newly created resource in storage.
     */
    public function StoreGaleriCategory(Request $request)
    {
        $request->validate([
            'galeri_category' => 'required'

        ], [
            'galeri_category.required' => 'galeri Category Name is Required',
        ]);

        galericategorym::insert([
            'galeri_category' => $request->galeri_category,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Galeri Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.galeri.category')->with($notification);
    } //end Method


    /**
     * Show the form for editing the specified resource.
     */
    public function EditGaleriCategory($id)
    {
        $category = galericategorym::findOrFail($id);
        return view('admin.page_galeri.category.edit', compact('category'));
    } //end Method

    /**
     * Update the specified resource in storage.
     */
    public function UpdateGaleriCategory(Request $request, $id)
    {
        galeriCategorym::findOrFail($id)->update([
            'galeri_category' => $request->galeri_category,
        ]);
        $notification = array(
            'message' => 'galeri Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.galeri.category')->with($notification);
    } //end Method
    /**
     * Remove the specified resource from storage.
     */
    public function DeleteGaleriCategory($id)
    {
        galeriCategorym::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Galeri Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
