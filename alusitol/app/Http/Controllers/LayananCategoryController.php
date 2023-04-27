<?php

namespace App\Http\Controllers;

use App\Models\LayananCategorym;
use Illuminate\Http\Request;

class LayananCategoryController extends Controller
{
    public function AllCategory()
    {
        $category = LayananCategorym::latest()->get();
        return view('admin.category_layanan.all_category', compact('category'));
    }
    public function AddLayananCategory()
    {
        return view('admin.category_layanan.add_layanan_category');
    } //end Method

    public function StoreLayananCategory(Request $request)
    {
        $request->validate([
            'layanan_category' => 'required'

        ], [
            'layanan_category.required' => 'layanan Category Name is Required',
        ]);

        LayananCategorym::insert([
            'layanan_category' => $request->layanan_category,
        ]);
        $notification = array(
            'message' => 'layanan Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category.layanan')->with($notification);
    } //end Method


    public function EditlayananCategory($id)
    {
        $category = LayananCategorym::findOrFail($id);
        return view('admin.category_layanan.edit_layanan_category', compact('category'));
    } //end Method
    public function UpdateLayananCategory(Request $request, $id)
    {
        LayananCategorym::findOrFail($id)->update([
            'layanan_category' => $request->layanan_category,
        ]);
        $notification = array(
            'message' => 'layanan Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category.layanan')->with($notification);
    } //end Method
    public function DeletelayananCategory($id)
    {
        LayananCategorym::findOrFail($id)->delete();

        $notification = array(
            'message' => 'layanan Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
