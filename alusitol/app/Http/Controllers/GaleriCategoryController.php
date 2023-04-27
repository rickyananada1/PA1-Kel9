<?php

namespace App\Http\Controllers;

use App\Models\GaleriCategorym;
use Illuminate\Http\Request;

class GaleriCategoryController extends Controller
{
    public function AllCategory()
    {
        $category = GaleriCategorym::latest()->get();
        return view('admin.category_galeri.all_category', compact('category'));
    }
    public function AddGaleriCategory()
    {
        return view('admin.category_galeri.add_galeri_category');
    } //end Method

    public function StoreGaleriCategory(Request $request)
    {
        $request->validate([
            'galeri_category' => 'required'

        ], [
            'galeri_category.required' => 'Galeri Category Name is Required',
        ]);

        GaleriCategorym::insert([
            'galeri_category' => $request->galeri_category,
        ]);
        $notification = array(
            'message' => 'Galeri Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category.galeri')->with($notification);
    } //end Method


    public function EditGaleriCategory($id)
    {
        $category = GaleriCategorym::findOrFail($id);
        return view('admin.category_galeri.edit_galeri_category', compact('category'));
    } //end Method
    public function UpdateGaleriCategory(Request $request, $id)
    {
        GaleriCategorym::findOrFail($id)->update([
            'galeri_category' => $request->galeri_category,
        ]);
        $notification = array(
            'message' => 'Galeri Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category.galeri')->with($notification);
    } //end Method
    public function DeleteGaleriCategory($id)
    {
        GaleriCategorym::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Galeri Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
