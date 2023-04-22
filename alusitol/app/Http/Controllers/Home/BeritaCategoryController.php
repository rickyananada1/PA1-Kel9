<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeritaCategory;

class BeritaCategoryController extends Controller
{
    public function AllBeritaCategory()
    {
        $berita_category = BeritaCategory::latest()->get();
        return view('admin.berita_category.berita_category_all', compact('berita_category'));
    } //end Method

    public function AddBeritaCategory()
    {
        return view('admin.berita_category.berita_category_add');
    } //end Method
    public function StoreBeritaCategory(Request $request)
    {
        $request->validate([
            'berita_category' => 'required'

        ], [
            'berita_category.required' => 'Berita Category Name is Required',
        ]);



        BeritaCategory::insert([
            'berita_category' => $request->berita_category,


        ]);
        $notification = array(
            'message' => 'Berita Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.berita.category')->with($notification);
    } //end Method
    public function EditBeritaCategory($id)
    {
        $beritacategory = BeritaCategory::findOrFail($id);
        return view('admin.berita_category.berita_category_edit', compact('beritacategory'));
    }
    public function UpdateBeritaCategory(Request $request, $id)
    {
        BeritaCategory::findOrFail($id)->update([
            'berita_category' => $request->berita_category,
        ]);
        $notification = array(
            'message' => 'Berita Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.berita.category')->with($notification);
    } //end Method
    public function DeleteBeritaCategory($id)
    {
        BeritaCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Berita Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
