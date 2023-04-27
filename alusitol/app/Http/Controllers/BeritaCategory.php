<?php

namespace App\Http\Controllers;

use App\Models\BeritaCategorym;
use Illuminate\Http\Request;

class BeritaCategory extends Controller
{
    public function AllCategory()
    {
        $category = BeritaCategorym::latest()->get();
        return view('admin.category_berita.all_category', compact('category'));
    }
    public function AddBeritaCategory()
    {
        return view('admin.category_berita.add_berita_category');
    } //end Method

    public function StoreBeritaCategory(Request $request)
    {
        $request->validate([
            'berita_category' => 'required'

        ], [
            'berita_category.required' => 'Berita Category Name is Required',
        ]);

        BeritaCategorym::insert([
            'berita_category' => $request->berita_category,
        ]);
        $notification = array(
            'message' => 'Berita Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    } //end Method


    public function EditBeritaCategory($id)
    {
        $category = BeritaCategorym::findOrFail($id);
        return view('admin.category_berita.edit_berita_category', compact('category'));
    } //end Method
    public function UpdateBeritaCategory(Request $request, $id)
    {
        BeritaCategorym::findOrFail($id)->update([
            'berita_category' => $request->berita_category,
        ]);
        $notification = array(
            'message' => 'Berita Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    } //end Method
    public function DeleteBeritaCategory($id)
    {
        BeritaCategorym::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Berita Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
