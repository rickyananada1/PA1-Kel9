<?php

namespace App\Http\Controllers;

use App\Models\LayananCategorym;
use App\Models\layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AllLayananAdmin()
    {
        $layanan = layanan::latest()->limit(10)->get();
        return view('admin.layanan.all_layanan_admin', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddLayanan()
    {
        $category = Layanancategorym::orderBy('layanan_category', 'ASC')->get();
        return view('admin.layanan.add_layanan', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreLayanan(Request $request)
    {
        $image = $request->file('layanan_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

        Image::make($image)->resize(827, 413)->save('upload/layanan/' . $name_gen); //panjanglebar
        $save_url = 'upload/layanan/' . $name_gen;

        Layanan::insert([
            'layanan_category_id' => $request->layanan_category_id,
            'layanan_short_description' => $request->layanan_short,
            'layanan_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'layanan Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.layanan.admin')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function EditLayanan(string $id)
    {
        $layanan = Layanan::findOrFail($id);
        $category = LayananCategorym::orderBy('layanan_category', 'ASC')->get();
        return view('admin.layanan.edit_layanan', compact('layanan', 'category'));
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
    public function UpdatedLayanan(Request $request)
    {

        $layanan_id = $request->id;

        if ($request->file('layanan_image')) {
            $image = $request->file('layanan_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(827, 413)->save('upload/layanan/' . $name_gen); //panjanglebar
            $save_url = 'upload/layanan/' . $name_gen;

            Layanan::findOrFail($layanan_id)->update([
                'layanan_category_id' => $request->layanan_category_id,
                'layanan_short_description' => $request->layanan_short,
                'layanan_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'layanan Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.layanan.admin')->with($notification);
        } else {
            Layanan::findOrFail($layanan_id)->update([
                'layanan_category_id' => $request->layanan_category_id,
                'layanan_short_description' => $request->layanan_short,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'layanan Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
            return redirect()->route('all.layanan.admin')->with($notification);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function DeleteLayanan($id)
    {
        $layanan = Layanan::findOrFail($id);
        $img = $layanan->layanan_image;
        unlink($img);

        Layanan::findOrFail($id)->delete();

        $notification = array(
            'message' => 'layanan Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
}
