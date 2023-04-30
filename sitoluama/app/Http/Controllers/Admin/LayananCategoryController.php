<?php

namespace App\Http\Controllers\Admin;

use App\Models\layanancategorym;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class LayananCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AllLayananCategory()
    {
        $category = layanancategorym::latest()->paginate(5);
        return view('admin.page_layanan.category.all', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddLayananCategory()
    {
        return view('admin.page_layanan.category.add');
    } //end Method

    /**
     * Store a newly created resource in storage.
     */
    public function StoreLayananCategory(Request $request)
    {
        $request->validate([
            'layanan_category' => 'required'

        ], [
            'layanan_category.required' => 'layanan Category Name is Required',
        ]);

        layanancategorym::insert([
            'layanan_category' => $request->layanan_category,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Layanan Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.layanan.category')->with($notification);
    } //end Method


    /**
     * Show the form for editing the specified resource.
     */
    public function EditLayananCategory($id)
    {
        $category = layanancategorym::findOrFail($id);
        return view('admin.page_layanan.category.edit', compact('category'));
    } //end Method

    /**
     * Update the specified resource in storage.
     */
    public function UpdateLayananCategory(Request $request, $id)
    {
        layananCategorym::findOrFail($id)->update([
            'layanan_category' => $request->layanan_category,
        ]);
        $notification = array(
            'message' => 'Layanan Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.layanan.category')->with($notification);
    } //end Method
    /**
     * Remove the specified resource from storage.
     */
    public function DeleteLayananCategory($id)
    {
        layananCategorym::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Layanan Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
